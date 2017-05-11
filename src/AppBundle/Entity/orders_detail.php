<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * orders_detail
 *
 * @ORM\Table(name="orders_detail")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\orders_detailRepository")
 */
class orders_detail
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
     * @ORM\Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer")
     */
    private $productQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="quality_Unit", type="integer")
     */
    private $qualityUnit;

    /**
     * @var float
     *
     * @ORM\Column(name="price_Unit", type="float")
     */
    private $priceUnit;

    /**
     * @var int
     *
     * @ORM\Column(name="suppliers_id", type="integer")
     */
    private $suppliersId;


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
     * @return orders_detail
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
     * Set productId
     *
     * @param integer $productId
     *
     * @return orders_detail
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set productQuantity
     *
     * @param integer $productQuantity
     *
     * @return orders_detail
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * Get productQuantity
     *
     * @return int
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * Set qualityUnit
     *
     * @param integer $qualityUnit
     *
     * @return orders_detail
     */
    public function setQualityUnit($qualityUnit)
    {
        $this->qualityUnit = $qualityUnit;

        return $this;
    }

    /**
     * Get qualityUnit
     *
     * @return int
     */
    public function getQualityUnit()
    {
        return $this->qualityUnit;
    }

    /**
     * Set priceUnit
     *
     * @param float $priceUnit
     *
     * @return orders_detail
     */
    public function setPriceUnit($priceUnit)
    {
        $this->priceUnit = $priceUnit;

        return $this;
    }

    /**
     * Get priceUnit
     *
     * @return float
     */
    public function getPriceUnit()
    {
        return $this->priceUnit;
    }

    /**
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return orders_detail
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
}

