<?php

namespace Ecommerce\AdminBundle\Controller;

use Ecommerce\AdminBundle\Entity\OrderDetails;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Orderdetail controller.
 *
 */
class OrderDetailsController extends Controller
{
    /**
     * Lists all orderDetail entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderDetails = $em->getRepository('EcommerceAdminBundle:OrderDetails')->findAll();

        return $this->render('orderdetails/index.html.twig', array(
            'orderDetails' => $orderDetails,
        ));
    }

    /**
     * Creates a new orderDetail entity.
     *
     */
    public function newAction(Request $request)
    {
        $orderDetail = new Orderdetail();
        $form = $this->createForm('Ecommerce\AdminBundle\Form\OrderDetailsType', $orderDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderDetail);
            $em->flush();

            return $this->redirectToRoute('orderdetails_show', array('id' => $orderDetail->getId()));
        }

        return $this->render('orderdetails/new.html.twig', array(
            'orderDetail' => $orderDetail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a orderDetail entity.
     *
     */
    public function showAction(OrderDetails $orderDetail)
    {
        $deleteForm = $this->createDeleteForm($orderDetail);

        return $this->render('orderdetails/show.html.twig', array(
            'orderDetail' => $orderDetail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing orderDetail entity.
     *
     */
    public function editAction(Request $request, OrderDetails $orderDetail)
    {
        $deleteForm = $this->createDeleteForm($orderDetail);
        $editForm = $this->createForm('Ecommerce\AdminBundle\Form\OrderDetailsType', $orderDetail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orderdetails_edit', array('id' => $orderDetail->getId()));
        }

        return $this->render('orderdetails/edit.html.twig', array(
            'orderDetail' => $orderDetail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a orderDetail entity.
     *
     */
    public function deleteAction(Request $request, OrderDetails $orderDetail)
    {
        $form = $this->createDeleteForm($orderDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orderDetail);
            $em->flush();
        }

        return $this->redirectToRoute('orderdetails_index');
    }

    /**
     * Creates a form to delete a orderDetail entity.
     *
     * @param OrderDetails $orderDetail The orderDetail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OrderDetails $orderDetail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orderdetails_delete', array('id' => $orderDetail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
