<?php

namespace AppBundle\Controller;

use AppBundle\Entity\suppliers_details;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Suppliers_detail controller.
 *
 * @Route("suppliers_details")
 */
class suppliers_detailsController extends Controller
{
    /**
     * Lists all suppliers_detail entities.
     *
     * @Route("/", name="suppliers_details_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $suppliers_details = $em->getRepository('AppBundle:suppliers_details')->findAll();

        return $this->render('suppliers_details/index.html.twig', array(
            'suppliers_details' => $suppliers_details,
        ));
    }

    /**
     * Creates a new suppliers_detail entity.
     *
     * @Route("/new", name="suppliers_details_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $suppliers_detail = new Suppliers_detail();
        $form = $this->createForm('AppBundle\Form\suppliers_detailsType', $suppliers_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suppliers_detail);
            $em->flush($suppliers_detail);

            return $this->redirectToRoute('suppliers_details_show', array('id' => $suppliers_detail->getId()));
        }

        return $this->render('suppliers_details/new.html.twig', array(
            'suppliers_detail' => $suppliers_detail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a suppliers_detail entity.
     *
     * @Route("/{id}", name="suppliers_details_show")
     * @Method("GET")
     */
    public function showAction(suppliers_details $suppliers_detail)
    {
        $deleteForm = $this->createDeleteForm($suppliers_detail);

        return $this->render('suppliers_details/show.html.twig', array(
            'suppliers_detail' => $suppliers_detail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing suppliers_detail entity.
     *
     * @Route("/{id}/edit", name="suppliers_details_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, suppliers_details $suppliers_detail)
    {
        $deleteForm = $this->createDeleteForm($suppliers_detail);
        $editForm = $this->createForm('AppBundle\Form\suppliers_detailsType', $suppliers_detail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('suppliers_details_edit', array('id' => $suppliers_detail->getId()));
        }

        return $this->render('suppliers_details/edit.html.twig', array(
            'suppliers_detail' => $suppliers_detail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a suppliers_detail entity.
     *
     * @Route("/{id}", name="suppliers_details_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, suppliers_details $suppliers_detail)
    {
        $form = $this->createDeleteForm($suppliers_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($suppliers_detail);
            $em->flush();
        }

        return $this->redirectToRoute('suppliers_details_index');
    }

    /**
     * Creates a form to delete a suppliers_detail entity.
     *
     * @param suppliers_details $suppliers_detail The suppliers_detail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(suppliers_details $suppliers_detail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('suppliers_details_delete', array('id' => $suppliers_detail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
