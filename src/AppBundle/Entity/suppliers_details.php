<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * suppliers_details
 *
 * @ORM\Table(name="suppliers_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\suppliers_detailsRepository")
 */
class suppliers_details
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
     * @ORM\Column(name="suppliers_id", type="integer")
     */
    private $suppliersId;

    /**
     * @var string
     *
     * @ORM\Column(name="susuppliers_Name", type="string", length=255)
     */
    private $susuppliersName;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_business_type", type="string", length=255)
     */
    private $suppliersBusinessType;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_web", type="string", length=150)
     */
    private $suppliersWeb;


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
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return suppliers_details
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
     * Set susuppliersName
     *
     * @param string $susuppliersName
     *
     * @return suppliers_details
     */
    public function setSusuppliersName($susuppliersName)
    {
        $this->susuppliersName = $susuppliersName;

        return $this;
    }

    /**
     * Get susuppliersName
     *
     * @return string
     */
    public function getSusuppliersName()
    {
        return $this->susuppliersName;
    }

    /**
     * Set suppliersBusinessType
     *
     * @param string $suppliersBusinessType
     *
     * @return suppliers_details
     */
    public function setSuppliersBusinessType($suppliersBusinessType)
    {
        $this->suppliersBusinessType = $suppliersBusinessType;

        return $this;
    }

    /**
     * Get suppliersBusinessType
     *
     * @return string
     */
    public function getSuppliersBusinessType()
    {
        return $this->suppliersBusinessType;
    }

    /**
     * Set suppliersWeb
     *
     * @param string $suppliersWeb
     *
     * @return suppliers_details
     */
    public function setSuppliersWeb($suppliersWeb)
    {
        $this->suppliersWeb = $suppliersWeb;

        return $this;
    }

    /**
     * Get suppliersWeb
     *
     * @return string
     */
    public function getSuppliersWeb()
    {
        return $this->suppliersWeb;
    }
}

