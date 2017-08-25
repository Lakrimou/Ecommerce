<?php

namespace Ecommerce\AdminBundle\Controller;

use Ecommerce\AdminBundle\Entity\Shippers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Shipper controller.
 *
 */
class ShippersController extends Controller
{
    /**
     * Lists all shipper entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $shippers = $em->getRepository('EcommerceAdminBundle:Shippers')->findAll();

        return $this->render('shippers/index.html.twig', array(
            'shippers' => $shippers,
        ));
    }

    /**
     * Creates a new shipper entity.
     *
     */
    public function newAction(Request $request)
    {
        $shipper = new Shippers();
        $form = $this->createForm('Ecommerce\AdminBundle\Form\ShippersType', $shipper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($shipper);
            $em->flush();

            return $this->redirectToRoute('shippers_show', array('id' => $shipper->getId()));
        }

        return $this->render('shippers/new.html.twig', array(
            'shipper' => $shipper,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a shipper entity.
     *
     */
    public function showAction(Shippers $shipper)
    {
        $deleteForm = $this->createDeleteForm($shipper);

        return $this->render('shippers/show.html.twig', array(
            'shipper' => $shipper,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing shipper entity.
     *
     */
    public function editAction(Request $request, Shippers $shipper)
    {
        $deleteForm = $this->createDeleteForm($shipper);
        $editForm = $this->createForm('Ecommerce\AdminBundle\Form\ShippersType', $shipper);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('shippers_edit', array('id' => $shipper->getId()));
        }

        return $this->render('shippers/edit.html.twig', array(
            'shipper' => $shipper,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a shipper entity.
     *
     */
    public function deleteAction(Request $request, Shippers $shipper)
    {
        $form = $this->createDeleteForm($shipper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($shipper);
            $em->flush();
        }

        return $this->redirectToRoute('shippers_index');
    }

    /**
     * Creates a form to delete a shipper entity.
     *
     * @param Shippers $shipper The shipper entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Shippers $shipper)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shippers_delete', array('id' => $shipper->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
