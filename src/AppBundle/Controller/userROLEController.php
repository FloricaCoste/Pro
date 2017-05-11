<?php

namespace AppBundle\Controller;

use AppBundle\Entity\userROLE;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Userrole controller.
 *
 * @Route("userrole")
 */
class userROLEController extends Controller
{
    /**
     * Lists all userROLE entities.
     *
     * @Route("/", name="userrole_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userROLEs = $em->getRepository('AppBundle:userROLE')->findAll();

        return $this->render('userrole/index.html.twig', array(
            'userROLEs' => $userROLEs,
        ));
    }

    /**
     * Creates a new userROLE entity.
     *
     * @Route("/new", name="userrole_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $userROLE = new Userrole();
        $form = $this->createForm('AppBundle\Form\userROLEType', $userROLE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userROLE);
            $em->flush($userROLE);

            return $this->redirectToRoute('userrole_show', array('id' => $userROLE->getId()));
        }

        return $this->render('userrole/new.html.twig', array(
            'userROLE' => $userROLE,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userROLE entity.
     *
     * @Route("/{id}", name="userrole_show")
     * @Method("GET")
     */
    public function showAction(userROLE $userROLE)
    {
        $deleteForm = $this->createDeleteForm($userROLE);

        return $this->render('userrole/show.html.twig', array(
            'userROLE' => $userROLE,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userROLE entity.
     *
     * @Route("/{id}/edit", name="userrole_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, userROLE $userROLE)
    {
        $deleteForm = $this->createDeleteForm($userROLE);
        $editForm = $this->createForm('AppBundle\Form\userROLEType', $userROLE);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('userrole_edit', array('id' => $userROLE->getId()));
        }

        return $this->render('userrole/edit.html.twig', array(
            'userROLE' => $userROLE,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userROLE entity.
     *
     * @Route("/{id}", name="userrole_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, userROLE $userROLE)
    {
        $form = $this->createDeleteForm($userROLE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userROLE);
            $em->flush();
        }

        return $this->redirectToRoute('userrole_index');
    }

    /**
     * Creates a form to delete a userROLE entity.
     *
     * @param userROLE $userROLE The userROLE entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(userROLE $userROLE)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userrole_delete', array('id' => $userROLE->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
