<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * product_invetory
 *
 * @ORM\Table(name="product_invetory")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\product_invetoryRepository")
 */
class product_invetory
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
     * @ORM\Column(name="product_ID", type="integer")
     */
    private $productID;

    /**
     * @var string
     *
     * @ORM\Column(name="product_Counting_Group", type="string", length=255)
     */
    private $productCountingGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="product_Unit", type="string", length=255)
     */
    private $productUnit;

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
     * @var string
     *
     * @ORM\Column(name="product_Description", type="string", length=255)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=255)
     */
    private $uRL;

    /**
     * @var string
     *
     * @ORM\Column(name="estimated_Delivery_Time", type="string", length=255)
     */
    private $estimatedDeliveryTime;


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
     * Set productID
     *
     * @param integer $productID
     *
     * @return product_invetory
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;

        return $this;
    }

    /**
     * Get productID
     *
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Set productCountingGroup
     *
     * @param string $productCountingGroup
     *
     * @return product_invetory
     */
    public function setProductCountingGroup($productCountingGroup)
    {
        $this->productCountingGroup = $productCountingGroup;

        return $this;
    }

    /**
     * Get productCountingGroup
     *
     * @return string
     */
    public function getProductCountingGroup()
    {
        return $this->productCountingGroup;
    }

    /**
     * Set productUnit
     *
     * @param string $productUnit
     *
     * @return product_invetory
     */
    public function setProductUnit($productUnit)
    {
        $this->productUnit = $productUnit;

        return $this;
    }

    /**
     * Get productUnit
     *
     * @return string
     */
    public function getProductUnit()
    {
        return $this->productUnit;
    }

    /**
     * Set qualityUnit
     *
     * @param integer $qualityUnit
     *
     * @return product_invetory
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
     * @return product_invetory
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
     * Set productDescription
     *
     * @param string $productDescription
     *
     * @return product_invetory
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set uRL
     *
     * @param string $uRL
     *
     * @return product_invetory
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Get uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Set estimatedDeliveryTime
     *
     * @param string $estimatedDeliveryTime
     *
     * @return product_invetory
     */
    public function setEstimatedDeliveryTime($estimatedDeliveryTime)
    {
        $this->estimatedDeliveryTime = $estimatedDeliveryTime;

        return $this;
    }

    /**
     * Get estimatedDeliveryTime
     *
     * @return string
     */
    public function getEstimatedDeliveryTime()
    {
        return $this->estimatedDeliveryTime;
    }
}

