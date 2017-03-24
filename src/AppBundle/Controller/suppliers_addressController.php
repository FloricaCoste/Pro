<?php

namespace AppBundle\Controller;

use AppBundle\Entity\suppliers_address;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Suppliers_address controller.
 *
 * @Route("suppliers_address")
 */
class suppliers_addressController extends Controller
{
    /**
     * Lists all suppliers_address entities.
     *
     * @Route("/", name="suppliers_address_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $suppliers_addresses = $em->getRepository('AppBundle:suppliers_address')->findAll();

        return $this->render('suppliers_address/index.html.twig', array(
            'suppliers_addresses' => $suppliers_addresses,
        ));
    }

    /**
     * Creates a new suppliers_address entity.
     *
     * @Route("/new", name="suppliers_address_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $suppliers_address = new Suppliers_address();
        $form = $this->createForm('AppBundle\Form\suppliers_addressType', $suppliers_address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suppliers_address);
            $em->flush($suppliers_address);

            return $this->redirectToRoute('suppliers_address_show', array('id' => $suppliers_address->getId()));
        }

        return $this->render('suppliers_address/new.html.twig', array(
            'suppliers_address' => $suppliers_address,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a suppliers_address entity.
     *
     * @Route("/{id}", name="suppliers_address_show")
     * @Method("GET")
     */
    public function showAction(suppliers_address $suppliers_address)
    {
        $deleteForm = $this->createDeleteForm($suppliers_address);

        return $this->render('suppliers_address/show.html.twig', array(
            'suppliers_address' => $suppliers_address,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing suppliers_address entity.
     *
     * @Route("/{id}/edit", name="suppliers_address_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, suppliers_address $suppliers_address)
    {
        $deleteForm = $this->createDeleteForm($suppliers_address);
        $editForm = $this->createForm('AppBundle\Form\suppliers_addressType', $suppliers_address);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('suppliers_address_edit', array('id' => $suppliers_address->getId()));
        }

        return $this->render('suppliers_address/edit.html.twig', array(
            'suppliers_address' => $suppliers_address,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a suppliers_address entity.
     *
     * @Route("/{id}", name="suppliers_address_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, suppliers_address $suppliers_address)
    {
        $form = $this->createDeleteForm($suppliers_address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($suppliers_address);
            $em->flush();
        }

        return $this->redirectToRoute('suppliers_address_index');
    }

    /**
     * Creates a form to delete a suppliers_address entity.
     *
     * @param suppliers_address $suppliers_address The suppliers_address entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(suppliers_address $suppliers_address)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('suppliers_address_delete', array('id' => $suppliers_address->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
