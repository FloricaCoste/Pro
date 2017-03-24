<?php

namespace AppBundle\Controller;

use AppBundle\Entity\quotation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Quotation controller.
 *
 * @Route("quotation")
 */
class quotationController extends Controller
{
    /**
     * Lists all quotation entities.
     *
     * @Route("/", name="quotation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quotations = $em->getRepository('AppBundle:quotation')->findAll();

        return $this->render('quotation/index.html.twig', array(
            'quotations' => $quotations,
        ));
    }

    /**
     * Creates a new quotation entity.
     *
     * @Route("/new", name="quotation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $quotation = new Quotation();
        $form = $this->createForm('AppBundle\Form\quotationType', $quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quotation);
            $em->flush($quotation);

            return $this->redirectToRoute('quotation_show', array('id' => $quotation->getId()));
        }

        return $this->render('quotation/new.html.twig', array(
            'quotation' => $quotation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a quotation entity.
     *
     * @Route("/{id}", name="quotation_show")
     * @Method("GET")
     */
    public function showAction(quotation $quotation)
    {
        $deleteForm = $this->createDeleteForm($quotation);

        return $this->render('quotation/show.html.twig', array(
            'quotation' => $quotation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing quotation entity.
     *
     * @Route("/{id}/edit", name="quotation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, quotation $quotation)
    {
        $deleteForm = $this->createDeleteForm($quotation);
        $editForm = $this->createForm('AppBundle\Form\quotationType', $quotation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quotation_edit', array('id' => $quotation->getId()));
        }

        return $this->render('quotation/edit.html.twig', array(
            'quotation' => $quotation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a quotation entity.
     *
     * @Route("/{id}", name="quotation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, quotation $quotation)
    {
        $form = $this->createDeleteForm($quotation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($quotation);
            $em->flush();
        }

        return $this->redirectToRoute('quotation_index');
    }

    /**
     * Creates a form to delete a quotation entity.
     *
     * @param quotation $quotation The quotation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(quotation $quotation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('quotation_delete', array('id' => $quotation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
