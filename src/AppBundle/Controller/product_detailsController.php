<?php

namespace AppBundle\Controller;

use AppBundle\Entity\product_details;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Product_detail controller.
 *
 * @Route("product_details")
 */
class product_detailsController extends Controller
{
    /**
     * Lists all product_detail entities.
     *
     * @Route("/", name="product_details_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $product_details = $em->getRepository('AppBundle:product_details')->findAll();

        return $this->render('product_details/index.html.twig', array(
            'product_details' => $product_details,
        ));
    }

    /**
     * Creates a new product_detail entity.
     *
     * @Route("/new", name="product_details_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $product_detail = new Product_details();
        $form = $this->createForm('AppBundle\Form\product_detailsType', $product_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product_detail);
            $em->flush($product_detail);

            return $this->redirectToRoute('product_details_show', array('id' => $product_detail->getId()));
        }

        return $this->render('product_details/new.html.twig', array(
            'product_detail' => $product_detail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a product_detail entity.
     *
     * @Route("/{id}", name="product_details_show")
     * @Method("GET")
     */
    public function showAction(product_details $product_detail)
    {
        $deleteForm = $this->createDeleteForm($product_detail);

        return $this->render('product_details/show.html.twig', array(
            'product_detail' => $product_detail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product_detail entity.
     *
     * @Route("/{id}/edit", name="product_details_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, product_details $product_detail)
    {
        $deleteForm = $this->createDeleteForm($product_detail);
        $editForm = $this->createForm('AppBundle\Form\product_detailsType', $product_detail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_details_edit', array('id' => $product_detail->getId()));
        }

        return $this->render('product_details/edit.html.twig', array(
            'product_detail' => $product_detail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product_detail entity.
     *
     * @Route("/{id}", name="product_details_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, product_details $product_detail)
    {
        $form = $this->createDeleteForm($product_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product_detail);
            $em->flush();
        }

        return $this->redirectToRoute('product_details_index');
    }

    /**
     * Creates a form to delete a product_detail entity.
     *
     * @param product_details $product_detail The product_detail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(product_details $product_detail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_details_delete', array('id' => $product_detail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
