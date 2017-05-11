<?php

namespace AppBundle\Controller;

use AppBundle\Entity\suppliers_contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Suppliers_contact controller.
 *
 * @Route("suppliers_contact")
 */
class suppliers_contactController extends Controller
{
    /**
     * Lists all suppliers_contact entities.
     *
     * @Route("/", name="suppliers_contact_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $suppliers_contacts = $em->getRepository('AppBundle:suppliers_contact')->findAll();

        return $this->render('suppliers_contact/index.html.twig', array(
            'suppliers_contacts' => $suppliers_contacts,
        ));
    }

    /**
     * Creates a new suppliers_contact entity.
     *
     * @Route("/new", name="suppliers_contact_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $suppliers_contact = new Suppliers_contact();
        $form = $this->createForm('AppBundle\Form\suppliers_contactType', $suppliers_contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suppliers_contact);
            $em->flush($suppliers_contact);

            return $this->redirectToRoute('suppliers_contact_show', array('id' => $suppliers_contact->getId()));
        }

        return $this->render('suppliers_contact/new.html.twig', array(
            'suppliers_contact' => $suppliers_contact,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a suppliers_contact entity.
     *
     * @Route("/{id}", name="suppliers_contact_show")
     * @Method("GET")
     */
    public function showAction(suppliers_contact $suppliers_contact)
    {
        $deleteForm = $this->createDeleteForm($suppliers_contact);

        return $this->render('suppliers_contact/show.html.twig', array(
            'suppliers_contact' => $suppliers_contact,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing suppliers_contact entity.
     *
     * @Route("/{id}/edit", name="suppliers_contact_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, suppliers_contact $suppliers_contact)
    {
        $deleteForm = $this->createDeleteForm($suppliers_contact);
        $editForm = $this->createForm('AppBundle\Form\suppliers_contactType', $suppliers_contact);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('suppliers_contact_edit', array('id' => $suppliers_contact->getId()));
        }

        return $this->render('suppliers_contact/edit.html.twig', array(
            'suppliers_contact' => $suppliers_contact,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a suppliers_contact entity.
     *
     * @Route("/{id}", name="suppliers_contact_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, suppliers_contact $suppliers_contact)
    {
        $form = $this->createDeleteForm($suppliers_contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($suppliers_contact);
            $em->flush();
        }

        return $this->redirectToRoute('suppliers_contact_index');
    }

    /**
     * Creates a form to delete a suppliers_contact entity.
     *
     * @param suppliers_contact $suppliers_contact The suppliers_contact entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(suppliers_contact $suppliers_contact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('suppliers_contact_delete', array('id' => $suppliers_contact->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
