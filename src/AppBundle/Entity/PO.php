<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PO
 *
 * @ORM\Table(name="p_o")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PORepository")
 */
class PO
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
     * @ORM\Column(name="hotel_ID", type="string", length=255)
     */
    private $hotelID;

    /**
     * @var int
     *
     * @ORM\Column(name="suppliers_ID", type="integer")
     */
    private $suppliersID;

    /**
     * @var string
     *
     * @ORM\Column(name="po_no", type="string", length=12)
     */
    private $poNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="po_date", type="datetime")
     */
    private $poDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ship_to_address", type="string", length=255)
     */
    private $shipToAddress;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="VAT", type="float")
     */
    private $vAT;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="string", length=255)
     */
    private $discount;

    /**
     * @var float
     *
     * @ORM\Column(name="discount_Value", type="float")
     */
    private $discountValue;

    /**
     * @var float
     *
     * @ORM\Column(name="shipment_Costs", type="float")
     */
    private $shipmentCosts;

    /**
     * @var float
     *
     * @ORM\Column(name="TAX_rate", type="float")
     */
    private $tAXRate;

    /**
     * @var bool
     *
     * @ORM\Column(name="aprovedaproved", type="boolean")
     */
    private $aprovedaproved;


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
     * Set hotelID
     *
     * @param string $hotelID
     *
     * @return PO
     */
    public function setHotelID($hotelID)
    {
        $this->hotelID = $hotelID;

        return $this;
    }

    /**
     * Get hotelID
     *
     * @return string
     */
    public function getHotelID()
    {
        return $this->hotelID;
    }

    /**
     * Set suppliersID
     *
     * @param integer $suppliersID
     *
     * @return PO
     */
    public function setSuppliersID($suppliersID)
    {
        $this->suppliersID = $suppliersID;

        return $this;
    }

    /**
     * Get suppliersID
     *
     * @return int
     */
    public function getSuppliersID()
    {
        return $this->suppliersID;
    }

    /**
     * Set poNo
     *
     * @param string $poNo
     *
     * @return PO
     */
    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;

        return $this;
    }

    /**
     * Get poNo
     *
     * @return string
     */
    public function getPoNo()
    {
        return $this->poNo;
    }

    /**
     * Set poDate
     *
     * @param \DateTime $poDate
     *
     * @return PO
     */
    public function setPoDate($poDate)
    {
        $this->poDate = $poDate;

        return $this;
    }

    /**
     * Get poDate
     *
     * @return \DateTime
     */
    public function getPoDate()
    {
        return $this->poDate;
    }

    /**
     * Set shipToAddress
     *
     * @param string $shipToAddress
     *
     * @return PO
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

        return $this;
    }

    /**
     * Get shipToAddress
     *
     * @return string
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return PO
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set vAT
     *
     * @param float $vAT
     *
     * @return PO
     */
    public function setVAT($vAT)
    {
        $this->vAT = $vAT;

        return $this;
    }

    /**
     * Get vAT
     *
     * @return float
     */
    public function getVAT()
    {
        return $this->vAT;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return PO
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set discountValue
     *
     * @param float $discountValue
     *
     * @return PO
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;

        return $this;
    }

    /**
     * Get discountValue
     *
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Set shipmentCosts
     *
     * @param float $shipmentCosts
     *
     * @return PO
     */
    public function setShipmentCosts($shipmentCosts)
    {
        $this->shipmentCosts = $shipmentCosts;

        return $this;
    }

    /**
     * Get shipmentCosts
     *
     * @return float
     */
    public function getShipmentCosts()
    {
        return $this->shipmentCosts;
    }

    /**
     * Set tAXRate
     *
     * @param float $tAXRate
     *
     * @return PO
     */
    public function setTAXRate($tAXRate)
    {
        $this->tAXRate = $tAXRate;

        return $this;
    }

    /**
     * Get tAXRate
     *
     * @return float
     */
    public function getTAXRate()
    {
        return $this->tAXRate;
    }

    /**
     * Set aprovedaproved
     *
     * @param boolean $aprovedaproved
     *
     * @return PO
     */
    public function setAprovedaproved($aprovedaproved)
    {
        $this->aprovedaproved = $aprovedaproved;

        return $this;
    }

    /**
     * Get aprovedaproved
     *
     * @return bool
     */
    public function getAprovedaproved()
    {
        return $this->aprovedaproved;
    }
}

