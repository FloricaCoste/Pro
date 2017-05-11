<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\stockRepository")
 */
class stock
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
     * @var \DateTime
     *
     * @ORM\Column(name="stock_date", type="datetimetz")
     */
    private $stockDate;

    /**
     * @var int
     *
     * @ORM\Column(name="product_ID", type="integer")
     */
    private $productID;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float")
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="suppliers_ID", type="integer")
     */
    private $suppliersID;


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
     * Set stockDate
     *
     * @param \DateTime $stockDate
     *
     * @return stock
     */
    public function setStockDate($stockDate)
    {
        $this->stockDate = $stockDate;

        return $this;
    }

    /**
     * Get stockDate
     *
     * @return \DateTime
     */
    public function getStockDate()
    {
        return $this->stockDate;
    }

    /**
     * Set productID
     *
     * @param integer $productID
     *
     * @return stock
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
     * Set quantity
     *
     * @param float $quantity
     *
     * @return stock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set suppliersID
     *
     * @param integer $suppliersID
     *
     * @return stock
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
}

