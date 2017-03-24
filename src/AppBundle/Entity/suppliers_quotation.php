<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * suppliers_quotation
 *
 * @ORM\Table(name="suppliers_quotation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\suppliers_quotationRepository")
 */
class suppliers_quotation
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
     * @ORM\Column(name="quotation_no", type="integer")
     */
    private $quotationNo;

    /**
     * @var int
     *
     * @ORM\Column(name="supplier_id", type="integer")
     */
    private $supplierId;

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
     * @var string
     *
     * @ORM\Column(name="quality_Unit", type="string", length=255)
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
     * Set quotationNo
     *
     * @param integer $quotationNo
     *
     * @return suppliers_quotation
     */
    public function setQuotationNo($quotationNo)
    {
        $this->quotationNo = $quotationNo;

        return $this;
    }

    /**
     * Get quotationNo
     *
     * @return int
     */
    public function getQuotationNo()
    {
        return $this->quotationNo;
    }

    /**
     * Set supplierId
     *
     * @param integer $supplierId
     *
     * @return suppliers_quotation
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * Get supplierId
     *
     * @return int
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * Set productCountingGroup
     *
     * @param string $productCountingGroup
     *
     * @return suppliers_quotation
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
     * @return suppliers_quotation
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
     * @param string $qualityUnit
     *
     * @return suppliers_quotation
     */
    public function setQualityUnit($qualityUnit)
    {
        $this->qualityUnit = $qualityUnit;

        return $this;
    }

    /**
     * Get qualityUnit
     *
     * @return string
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
     * @return suppliers_quotation
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
     * @return suppliers_quotation
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
     * @return suppliers_quotation
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
     * @return suppliers_quotation
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

