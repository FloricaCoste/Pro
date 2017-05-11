<?php

namespace AppBundle\Controller;

use AppBundle\Entity\suppliers_bank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Suppliers_bank controller.
 *
 * @Route("suppliers_bank")
 */
class suppliers_bankController extends Controller
{
    /**
     * Lists all suppliers_bank entities.
     *
     * @Route("/", name="suppliers_bank_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $suppliers_banks = $em->getRepository('AppBundle:suppliers_bank')->findAll();

        return $this->render('suppliers_bank/index.html.twig', array(
            'suppliers_banks' => $suppliers_banks,
        ));
    }

    /**
     * Creates a new suppliers_bank entity.
     *
     * @Route("/new", name="suppliers_bank_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $suppliers_bank = new Suppliers_bank();
        $form = $this->createForm('AppBundle\Form\suppliers_bankType', $suppliers_bank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suppliers_bank);
            $em->flush($suppliers_bank);

            return $this->redirectToRoute('suppliers_bank_show', array('id' => $suppliers_bank->getId()));
        }

        return $this->render('suppliers_bank/new.html.twig', array(
            'suppliers_bank' => $suppliers_bank,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a suppliers_bank entity.
     *
     * @Route("/{id}", name="suppliers_bank_show")
     * @Method("GET")
     */
    public function showAction(suppliers_bank $suppliers_bank)
    {
        $deleteForm = $this->createDeleteForm($suppliers_bank);

        return $this->render('suppliers_bank/show.html.twig', array(
            'suppliers_bank' => $suppliers_bank,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing suppliers_bank entity.
     *
     * @Route("/{id}/edit", name="suppliers_bank_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, suppliers_bank $suppliers_bank)
    {
        $deleteForm = $this->createDeleteForm($suppliers_bank);
        $editForm = $this->createForm('AppBundle\Form\suppliers_bankType', $suppliers_bank);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('suppliers_bank_edit', array('id' => $suppliers_bank->getId()));
        }

        return $this->render('suppliers_bank/edit.html.twig', array(
            'suppliers_bank' => $suppliers_bank,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a suppliers_bank entity.
     *
     * @Route("/{id}", name="suppliers_bank_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, suppliers_bank $suppliers_bank)
    {
        $form = $this->createDeleteForm($suppliers_bank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($suppliers_bank);
            $em->flush();
        }

        return $this->redirectToRoute('suppliers_bank_index');
    }

    /**
     * Creates a form to delete a suppliers_bank entity.
     *
     * @param suppliers_bank $suppliers_bank The suppliers_bank entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(suppliers_bank $suppliers_bank)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('suppliers_bank_delete', array('id' => $suppliers_bank->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
