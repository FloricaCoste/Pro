<?php

namespace AppBundle\Controller;

use AppBundle\Entity\suppliers_quotation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Suppliers_quotation controller.
 *
 * @Route("suppliers_quotation")
 */
class suppliers_quotationController extends Controller
{
    /**
     * Lists all suppliers_quotation entities.
     *
     * @Route("/", name="suppliers_quotation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $suppliers_quotations = $em->getRepository('AppBundle:suppliers_quotation')->findAll();

        return $this->render('suppliers_quotation/index.html.twig', array(
            'suppliers_quotations' => $suppliers_quotations,
        ));
    }

    /**
     * Creates a new suppliers_quotation entity.
     *
     * @Route("/new", name="suppliers_quotation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $suppliers_quotation = new Suppliers_quotation();
        $form = $this->createForm('AppBundle\Form\suppliers_quotationType', $suppliers_quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suppliers_quotation);
            $em->flush($suppliers_quotation);

            return $this->redirectToRoute('suppliers_quotation_show', array('id' => $suppliers_quotation->getId()));
        }

        return $this->render('suppliers_quotation/new.html.twig', array(
            'suppliers_quotation' => $suppliers_quotation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a suppliers_quotation entity.
     *
     * @Route("/{id}", name="suppliers_quotation_show")
     * @Method("GET")
     */
    public function showAction(suppliers_quotation $suppliers_quotation)
    {
        $deleteForm = $this->createDeleteForm($suppliers_quotation);

        return $this->render('suppliers_quotation/show.html.twig', array(
            'suppliers_quotation' => $suppliers_quotation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing suppliers_quotation entity.
     *
     * @Route("/{id}/edit", name="suppliers_quotation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, suppliers_quotation $suppliers_quotation)
    {
        $deleteForm = $this->createDeleteForm($suppliers_quotation);
        $editForm = $this->createForm('AppBundle\Form\suppliers_quotationType', $suppliers_quotation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('suppliers_quotation_edit', array('id' => $suppliers_quotation->getId()));
        }

        return $this->render('suppliers_quotation/edit.html.twig', array(
            'suppliers_quotation' => $suppliers_quotation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a suppliers_quotation entity.
     *
     * @Route("/{id}", name="suppliers_quotation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, suppliers_quotation $suppliers_quotation)
    {
        $form = $this->createDeleteForm($suppliers_quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($suppliers_quotation);
            $em->flush();
        }

        return $this->redirectToRoute('suppliers_quotation_index');
    }

    /**
     * Creates a form to delete a suppliers_quotation entity.
     *
     * @param suppliers_quotation $suppliers_quotation The suppliers_quotation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(suppliers_quotation $suppliers_quotation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('suppliers_quotation_delete', array('id' => $suppliers_quotation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
