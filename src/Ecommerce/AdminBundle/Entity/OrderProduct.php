<?php

namespace Ecommerce\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderProduct
 *
 * @ORM\Table(name="order_product")
 * @ORM\Entity(repositoryClass="Ecommerce\AdminBundle\Repository\OrderProductRepository")
 */
class OrderProduct
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
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\AdminBundle\Entity\Product", inversedBy="orderProduct")
     */
    private $Product;

    /**
     * @ORM\ManyToOne(targetEntity="Ecommerce\AdminBundle\Entity\OrderDetails", inversedBy="orderProduct")
     */
    private $orderDetail;

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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OrderProduct
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
     * Set product
     *
     * @param \Ecommerce\AdminBundle\Entity\Product $product
     *
     * @return OrderProduct
     */
    public function setProduct(\Ecommerce\AdminBundle\Entity\Product $product = null)
    {
        $this->Product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Ecommerce\AdminBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set orderDetail
     *
     * @param \Ecommerce\AdminBundle\Entity\OrderDetails $orderDetail
     *
     * @return OrderProduct
     */
    public function setOrderDetail(\Ecommerce\AdminBundle\Entity\OrderDetails $orderDetail = null)
    {
        $this->orderDetail = $orderDetail;

        return $this;
    }

    /**
     * Get orderDetail
     *
     * @return \Ecommerce\AdminBundle\Entity\OrderDetails
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }
}
