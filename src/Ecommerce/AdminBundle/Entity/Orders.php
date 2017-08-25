<?php

namespace Ecommerce\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="Ecommerce\AdminBundle\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="orderNumber", type="bigint", nullable=true)
     */
    private $orderNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orderDate", type="datetime", nullable=true)
     */
    private $orderDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="paid", type="boolean", nullable=true)
     */
    private $paid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requiredDate", type="datetime", nullable=true)
     */
    private $requiredDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paimentDate", type="datetime", nullable=true)
     */
    private $paimentDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $customer;

    /**
     * @ORM\OneToOne(targetEntity="Ecommerce\AdminBundle\Entity\Payment")
     */
    private $payment;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\AdminBundle\Entity\Shippers")
     */
    private $shipper;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orderNumber
     *
     * @param integer $orderNumber
     *
     * @return Orders
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return Orders
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     *
     * @return Orders
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set requiredDate
     *
     * @param \DateTime $requiredDate
     *
     * @return Orders
     */
    public function setRequiredDate($requiredDate)
    {
        $this->requiredDate = $requiredDate;

        return $this;
    }

    /**
     * Get requiredDate
     *
     * @return \DateTime
     */
    public function getRequiredDate()
    {
        return $this->requiredDate;
    }

    /**
     * Set paimentDate
     *
     * @param \DateTime $paimentDate
     *
     * @return Orders
     */
    public function setPaimentDate($paimentDate)
    {
        $this->paimentDate = $paimentDate;

        return $this;
    }

    /**
     * Get paimentDate
     *
     * @return \DateTime
     */
    public function getPaimentDate()
    {
        return $this->paimentDate;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Orders
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\User $customer
     *
     * @return Orders
     */
    public function setCustomer(\AppBundle\Entity\User $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\User
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set payment
     *
     * @param \Ecommerce\AdminBundle\Entity\Payment $payment
     *
     * @return Orders
     */
    public function setPayment(\Ecommerce\AdminBundle\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \Ecommerce\AdminBundle\Entity\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set shipper
     *
     * @param \Ecommerce\AdminBundle\Entity\Shippers $shipper
     *
     * @return Orders
     */
    public function setShipper(\Ecommerce\AdminBundle\Entity\Shippers $shipper = null)
    {
        $this->shipper = $shipper;

        return $this;
    }

    /**
     * Get shipper
     *
     * @return \Ecommerce\AdminBundle\Entity\Shippers
     */
    public function getShipper()
    {
        return $this->shipper;
    }
}
