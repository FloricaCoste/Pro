<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PO;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Po controller.
 *
 * @Route("po")
 */
class POController extends Controller
{
    /**
     * Lists all pO entities.
     *
     * @Route("/", name="po_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pOs = $em->getRepository('AppBundle:PO')->findAll();

        return $this->render('po/index.html.twig', array(
            'pOs' => $pOs,
        ));
    }

    /**
     * Creates a new pO entity.
     *
     * @Route("/new", name="po_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pO = new Po();
        $form = $this->createForm('AppBundle\Form\POType', $pO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pO);
            $em->flush($pO);

            return $this->redirectToRoute('po_show', array('id' => $pO->getId()));
        }

        return $this->render('po/new.html.twig', array(
            'pO' => $pO,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pO entity.
     *
     * @Route("/{id}", name="po_show")
     * @Method("GET")
     */
    public function showAction(PO $pO)
    {
        $deleteForm = $this->createDeleteForm($pO);

        return $this->render('po/show.html.twig', array(
            'pO' => $pO,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pO entity.
     *
     * @Route("/{id}/edit", name="po_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PO $pO)
    {
        $deleteForm = $this->createDeleteForm($pO);
        $editForm = $this->createForm('AppBundle\Form\POType', $pO);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('po_edit', array('id' => $pO->getId()));
        }

        return $this->render('po/edit.html.twig', array(
            'pO' => $pO,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pO entity.
     *
     * @Route("/{id}", name="po_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PO $pO)
    {
        $form = $this->createDeleteForm($pO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pO);
            $em->flush();
        }

        return $this->redirectToRoute('po_index');
    }

    /**
     * Creates a form to delete a pO entity.
     *
     * @param PO $pO The pO entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PO $pO)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('po_delete', array('id' => $pO->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
