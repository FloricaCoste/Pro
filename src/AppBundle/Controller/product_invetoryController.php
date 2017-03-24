<?php

namespace AppBundle\Controller;

use AppBundle\Entity\product_invetory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Product_invetory controller.
 *
 * @Route("product_invetory")
 */
class product_invetoryController extends Controller
{
    /**
     * Lists all product_invetory entities.
     *
     * @Route("/", name="product_invetory_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $product_invetories = $em->getRepository('AppBundle:product_invetory')->findAll();

        return $this->render('product_invetory/index.html.twig', array(
            'product_invetories' => $product_invetories,
        ));
    }

    /**
     * Creates a new product_invetory entity.
     *
     * @Route("/new", name="product_invetory_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $product_invetory = new Product_invetory();
        $form = $this->createForm('AppBundle\Form\product_invetoryType', $product_invetory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product_invetory);
            $em->flush($product_invetory);

            return $this->redirectToRoute('product_invetory_show', array('id' => $product_invetory->getId()));
        }

        return $this->render('product_invetory/new.html.twig', array(
            'product_invetory' => $product_invetory,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a product_invetory entity.
     *
     * @Route("/{id}", name="product_invetory_show")
     * @Method("GET")
     */
    public function showAction(product_invetory $product_invetory)
    {
        $deleteForm = $this->createDeleteForm($product_invetory);

        return $this->render('product_invetory/show.html.twig', array(
            'product_invetory' => $product_invetory,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product_invetory entity.
     *
     * @Route("/{id}/edit", name="product_invetory_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, product_invetory $product_invetory)
    {
        $deleteForm = $this->createDeleteForm($product_invetory);
        $editForm = $this->createForm('AppBundle\Form\product_invetoryType', $product_invetory);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_invetory_edit', array('id' => $product_invetory->getId()));
        }

        return $this->render('product_invetory/edit.html.twig', array(
            'product_invetory' => $product_invetory,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product_invetory entity.
     *
     * @Route("/{id}", name="product_invetory_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, product_invetory $product_invetory)
    {
        $form = $this->createDeleteForm($product_invetory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product_invetory);
            $em->flush();
        }

        return $this->redirectToRoute('product_invetory_index');
    }

    /**
     * Creates a form to delete a product_invetory entity.
     *
     * @param product_invetory $product_invetory The product_invetory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(product_invetory $product_invetory)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_invetory_delete', array('id' => $product_invetory->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
