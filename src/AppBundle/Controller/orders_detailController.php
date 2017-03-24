<?php

namespace AppBundle\Controller;

use AppBundle\Entity\orders_detail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Orders_detail controller.
 *
 * @Route("orders_detail")
 */
class orders_detailController extends Controller
{
    /**
     * Lists all orders_detail entities.
     *
     * @Route("/", name="orders_detail_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orders_details = $em->getRepository('AppBundle:orders_detail')->findAll();

        return $this->render('orders_detail/index.html.twig', array(
            'orders_details' => $orders_details,
        ));
    }

    /**
     * Creates a new orders_detail entity.
     *
     * @Route("/new", name="orders_detail_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $orders_detail = new Orders_detail();
        $form = $this->createForm('AppBundle\Form\orders_detailType', $orders_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orders_detail);
            $em->flush($orders_detail);

            return $this->redirectToRoute('orders_detail_show', array('id' => $orders_detail->getId()));
        }

        return $this->render('orders_detail/new.html.twig', array(
            'orders_detail' => $orders_detail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a orders_detail entity.
     *
     * @Route("/{id}", name="orders_detail_show")
     * @Method("GET")
     */
    public function showAction(orders_detail $orders_detail)
    {
        $deleteForm = $this->createDeleteForm($orders_detail);

        return $this->render('orders_detail/show.html.twig', array(
            'orders_detail' => $orders_detail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing orders_detail entity.
     *
     * @Route("/{id}/edit", name="orders_detail_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, orders_detail $orders_detail)
    {
        $deleteForm = $this->createDeleteForm($orders_detail);
        $editForm = $this->createForm('AppBundle\Form\orders_detailType', $orders_detail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orders_detail_edit', array('id' => $orders_detail->getId()));
        }

        return $this->render('orders_detail/edit.html.twig', array(
            'orders_detail' => $orders_detail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a orders_detail entity.
     *
     * @Route("/{id}", name="orders_detail_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, orders_detail $orders_detail)
    {
        $form = $this->createDeleteForm($orders_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orders_detail);
            $em->flush();
        }

        return $this->redirectToRoute('orders_detail_index');
    }

    /**
     * Creates a form to delete a orders_detail entity.
     *
     * @param orders_detail $orders_detail The orders_detail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(orders_detail $orders_detail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orders_detail_delete', array('id' => $orders_detail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
