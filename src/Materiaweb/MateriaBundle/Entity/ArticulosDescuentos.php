<?php

namespace Materiaweb\MateriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosDescuentos
 */
class ArticulosDescuentos
{
	
	private $ArtDescIdTabla;
	private $ArtDescCodart;
	private $ArtDescNroOrden;
	private $ArtDescDetalle;
	private $ArtDescValor;

    /**
     * Get ArtDescIdTabla
     *
     * @return integer 
     */
    public function getArtDescIdTabla()
    {
        return $this->ArtDescIdTabla;
    }

    /**
     * Set ArtDescCodart
     *
     * @param integer $artDescCodart
     * @return ArticulosDescuentos
     */
    public function setArtDescCodart($artDescCodart)
    {
        $this->ArtDescCodart = $artDescCodart;
    
        return $this;
    }

    /**
     * Get ArtDescCodart
     *
     * @return integer 
     */
    public function getArtDescCodart()
    {
        return $this->ArtDescCodart;
    }

    /**
     * Set ArtDescNroOrden
     *
     * @param integer $artDescNroOrden
     * @return ArticulosDescuentos
     */
    public function setArtDescNroOrden($artDescNroOrden)
    {
        $this->ArtDescNroOrden = $artDescNroOrden;
    
        return $this;
    }

    /**
     * Get ArtDescNroOrden
     *
     * @return integer 
     */
    public function getArtDescNroOrden()
    {
        return $this->ArtDescNroOrden;
    }

    /**
     * Set ArtDescDetalle
     *
     * @param string $artDescDetalle
     * @return ArticulosDescuentos
     */
    public function setArtDescDetalle($artDescDetalle)
    {
        $this->ArtDescDetalle = $artDescDetalle;
    
        return $this;
    }

    /**
     * Get ArtDescDetalle
     *
     * @return string 
     */
    public function getArtDescDetalle()
    {
        return $this->ArtDescDetalle;
    }

    /**
     * Set ArtDescValor
     *
     * @param string $artDescValor
     * @return ArticulosDescuentos
     */
    public function setArtDescValor($artDescValor)
    {
        $this->ArtDescValor = $artDescValor;
    
        return $this;
    }

    /**
     * Get ArtDescValor
     *
     * @return string 
     */
    public function getArtDescValor()
    {
        return $this->ArtDescValor;
    }
    /**
     * @var integer
     */
    private $ArtDescIdCompany;


    /**
     * Set ArtDescIdCompany
     *
     * @param integer $artDescIdCompany
     * @return ArticulosDescuentos
     */
    public function setArtDescIdCompany($artDescIdCompany)
    {
        $this->ArtDescIdCompany = $artDescIdCompany;
    
        return $this;
    }

    /**
     * Get ArtDescIdCompany
     *
     * @return integer 
     */
    public function getArtDescIdCompany()
    {
        return $this->ArtDescIdCompany;
    }
}
