<?php

namespace Materiaweb\MateriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosRecargos
 */
class ArticulosRecargos
{
	
	private $ArtRecIdTabla;
	private $ArtRecIdCompany;
	private $ArtRecCodart;
	private $ArtRecNroOrden;
	private $ArtRecDetalle;
	private $ArtRecValor;

    /**
     * Get ArtRecIdTabla
     *
     * @return integer 
     */
    public function getArtRecIdTabla()
    {
        return $this->ArtRecIdTabla;
    }

    /**
     * Set ArtRecIdCompany
     *
     * @param integer $artRecIdCompany
     * @return ArticulosRecargos
     */
    public function setArtRecIdCompany($artRecIdCompany)
    {
        $this->ArtRecIdCompany = $artRecIdCompany;
    
        return $this;
    }

    /**
     * Get ArtRecIdCompany
     *
     * @return integer 
     */
    public function getArtRecIdCompany()
    {
        return $this->ArtRecIdCompany;
    }

    /**
     * Set ArtRecCodart
     *
     * @param integer $artRecCodart
     * @return ArticulosRecargos
     */
    public function setArtRecCodart($artRecCodart)
    {
        $this->ArtRecCodart = $artRecCodart;
    
        return $this;
    }

    /**
     * Get ArtRecCodart
     *
     * @return integer 
     */
    public function getArtRecCodart()
    {
        return $this->ArtRecCodart;
    }

    /**
     * Set ArtRecNroOrden
     *
     * @param integer $artRecNroOrden
     * @return ArticulosRecargos
     */
    public function setArtRecNroOrden($artRecNroOrden)
    {
        $this->ArtRecNroOrden = $artRecNroOrden;
    
        return $this;
    }

    /**
     * Get ArtRecNroOrden
     *
     * @return integer 
     */
    public function getArtRecNroOrden()
    {
        return $this->ArtRecNroOrden;
    }

    /**
     * Set ArtRecDetalle
     *
     * @param string $artRecDetalle
     * @return ArticulosRecargos
     */
    public function setArtRecDetalle($artRecDetalle)
    {
        $this->ArtRecDetalle = $artRecDetalle;
    
        return $this;
    }

    /**
     * Get ArtRecDetalle
     *
     * @return string 
     */
    public function getArtRecDetalle()
    {
        return $this->ArtRecDetalle;
    }

    /**
     * Set ArtRecValor
     *
     * @param string $artRecValor
     * @return ArticulosRecargos
     */
    public function setArtRecValor($artRecValor)
    {
        $this->ArtRecValor = $artRecValor;
    
        return $this;
    }

    /**
     * Get ArtRecValor
     *
     * @return string 
     */
    public function getArtRecValor()
    {
        return $this->ArtRecValor;
    }
}
