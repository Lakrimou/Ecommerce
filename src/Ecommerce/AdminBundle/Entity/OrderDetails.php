<?php

namespace Ecommerce\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetails
 *
 * @ORM\Table(name="order_details")
 * @ORM\Entity(repositoryClass="Ecommerce\AdminBundle\Repository\OrderDetailsRepository")
 */
class OrderDetails
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
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total;

    /**
     * @var int
     *
     * @ORM\Column(name="orderNumber", type="bigint", nullable=true)
     */
    private $orderNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="shipDate", type="datetime", nullable=true)
     */
    private $shipDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="fulfilled", type="boolean", nullable=true)
     */
    private $fulfilled;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\AdminBundle\Entity\OrderProduct", mappedBy="orderDetails")
     */
    private $orderProducts;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\AdminBundle\Entity\Orders")
     */
    private $order;

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
     * Set price
     *
     * @param integer $price
     *
     * @return OrderDetails
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OrderDetails
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return OrderDetails
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set orderNumber
     *
     * @param integer $orderNumber
     *
     * @return OrderDetails
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
     * Set shipDate
     *
     * @param \DateTime $shipDate
     *
     * @return OrderDetails
     */
    public function setShipDate($shipDate)
    {
        $this->shipDate = $shipDate;

        return $this;
    }

    /**
     * Get shipDate
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }

    /**
     * Set fulfilled
     *
     * @param boolean $fulfilled
     *
     * @return OrderDetails
     */
    public function setFulfilled($fulfilled)
    {
        $this->fulfilled = $fulfilled;

        return $this;
    }

    /**
     * Get fulfilled
     *
     * @return bool
     */
    public function getFulfilled()
    {
        return $this->fulfilled;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderProducts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add orderProduct
     *
     * @param \Ecommerce\AdminBundle\Entity\OrderProduct $orderProduct
     *
     * @return OrderDetails
     */
    public function addOrderProduct(\Ecommerce\AdminBundle\Entity\OrderProduct $orderProduct)
    {
        $this->orderProducts[] = $orderProduct;

        return $this;
    }

    /**
     * Remove orderProduct
     *
     * @param \Ecommerce\AdminBundle\Entity\OrderProduct $orderProduct
     */
    public function removeOrderProduct(\Ecommerce\AdminBundle\Entity\OrderProduct $orderProduct)
    {
        $this->orderProducts->removeElement($orderProduct);
    }

    /**
     * Get orderProducts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }


    /**
     * Set order
     *
     * @param \Ecommerce\AdminBundle\Entity\Orders $order
     *
     * @return OrderDetails
     */
    public function setOrder(\Ecommerce\AdminBundle\Entity\Orders $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Ecommerce\AdminBundle\Entity\Orders
     */
    public function getOrder()
    {
        return $this->order;
    }
}
