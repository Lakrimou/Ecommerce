<?php

namespace Ecommerce\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="Ecommerce\AdminBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @var string
     *
     * @ORM\Column(name="paymentType", type="string", length=255, nullable=true)
     */
    private $paymentType;

    /**
     * @var bool
     *
     * @ORM\Column(name="allowed", type="boolean", nullable=true)
     */
    private $allowed;


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
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return Payment
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set allowed
     *
     * @param boolean $allowed
     *
     * @return Payment
     */
    public function setAllowed($allowed)
    {
        $this->allowed = $allowed;

        return $this;
    }

    /**
     * Get allowed
     *
     * @return bool
     */
    public function getAllowed()
    {
        return $this->allowed;
    }
}
