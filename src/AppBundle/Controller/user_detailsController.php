<?php

namespace AppBundle\Controller;

use AppBundle\Entity\user_details;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * User_detail controller.
 *
 * @Route("user_details")
 */
class user_detailsController extends Controller
{
    /**
     * Lists all user_detail entities.
     *
     * @Route("/", name="user_details_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user_details = $em->getRepository('AppBundle:user_details')->findAll();

        return $this->render('user_details/index.html.twig', array(
            'user_details' => $user_details,
        ));
    }

    /**
     * Creates a new user_detail entity.
     *
     * @Route("/new", name="user_details_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user_detail = new User_detail();
        $form = $this->createForm('AppBundle\Form\user_detailsType', $user_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user_detail);
            $em->flush($user_detail);

            return $this->redirectToRoute('user_details_show', array('id' => $user_detail->getId()));
        }

        return $this->render('user_details/new.html.twig', array(
            'user_detail' => $user_detail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user_detail entity.
     *
     * @Route("/{id}", name="user_details_show")
     * @Method("GET")
     */
    public function showAction(user_details $user_detail)
    {
        $deleteForm = $this->createDeleteForm($user_detail);

        return $this->render('user_details/show.html.twig', array(
            'user_detail' => $user_detail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user_detail entity.
     *
     * @Route("/{id}/edit", name="user_details_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, user_details $user_detail)
    {
        $deleteForm = $this->createDeleteForm($user_detail);
        $editForm = $this->createForm('AppBundle\Form\user_detailsType', $user_detail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_details_edit', array('id' => $user_detail->getId()));
        }

        return $this->render('user_details/edit.html.twig', array(
            'user_detail' => $user_detail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user_detail entity.
     *
     * @Route("/{id}", name="user_details_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, user_details $user_detail)
    {
        $form = $this->createDeleteForm($user_detail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user_detail);
            $em->flush();
        }

        return $this->redirectToRoute('user_details_index');
    }

    /**
     * Creates a form to delete a user_detail entity.
     *
     * @param user_details $user_detail The user_detail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(user_details $user_detail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_details_delete', array('id' => $user_detail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
