<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
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
     * @ORM\Column(name="orders_id", type="integer")
     */
    private $ordersId;

    /**
     * @var int
     *
     * @ORM\Column(name="suppliers_id", type="integer")
     */
    private $suppliersId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orders_date", type="datetimetz")
     */
    private $ordersDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="datetimetz")
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ship_address", type="string", length=255)
     */
    private $shipAddress;

    /**
     * @var float
     *
     * @ORM\Column(name="orders_cost", type="float")
     */
    private $ordersCost;


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
     * Set ordersId
     *
     * @param integer $ordersId
     *
     * @return Orders
     */
    public function setOrdersId($ordersId)
    {
        $this->ordersId = $ordersId;

        return $this;
    }

    /**
     * Get ordersId
     *
     * @return int
     */
    public function getOrdersId()
    {
        return $this->ordersId;
    }

    /**
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return Orders
     */
    public function setSuppliersId($suppliersId)
    {
        $this->suppliersId = $suppliersId;

        return $this;
    }

    /**
     * Get suppliersId
     *
     * @return int
     */
    public function getSuppliersId()
    {
        return $this->suppliersId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Orders
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set ordersDate
     *
     * @param \DateTime $ordersDate
     *
     * @return Orders
     */
    public function setOrdersDate($ordersDate)
    {
        $this->ordersDate = $ordersDate;

        return $this;
    }

    /**
     * Get ordersDate
     *
     * @return \DateTime
     */
    public function getOrdersDate()
    {
        return $this->ordersDate;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     *
     * @return Orders
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set shipAddress
     *
     * @param string $shipAddress
     *
     * @return Orders
     */
    public function setShipAddress($shipAddress)
    {
        $this->shipAddress = $shipAddress;

        return $this;
    }

    /**
     * Get shipAddress
     *
     * @return string
     */
    public function getShipAddress()
    {
        return $this->shipAddress;
    }

    /**
     * Set ordersCost
     *
     * @param float $ordersCost
     *
     * @return Orders
     */
    public function setOrdersCost($ordersCost)
    {
        $this->ordersCost = $ordersCost;

        return $this;
    }

    /**
     * Get ordersCost
     *
     * @return float
     */
    public function getOrdersCost()
    {
        return $this->ordersCost;
    }
}

