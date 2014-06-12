<?php

namespace Materiaweb\MateriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosPreciosCostos
 */
class ArticulosPreciosCostos
{
	private $ArtPrecCostIdTabla;
	private $ArtPrecCostIdCompany;
	private $ArtPrecCostCodart;
	private $ArtPrecCostNroOrden;
	private $ArtPrecCostDetalle;
	private $ArtPrecCostValor;
	private $ArtPrecCostMoneda;
	private $ArtPrecCostIdentificador;

    /**
     * Get ArtPrecCostIdTabla
     *
     * @return integer 
     */
    public function getArtPrecCostIdTabla()
    {
        return $this->ArtPrecCostIdTabla;
    }

    /**
     * Set ArtPrecCostIdCompany
     *
     * @param integer $artPrecCostIdCompany
     * @return ArticulosPreciosCostos
     */
    public function setArtPrecCostIdCompany($artPrecCostIdCompany)
    {
        $this->ArtPrecCostIdCompany = $artPrecCostIdCompany;
    
        return $this;
    }

    /**
     * Get ArtPrecCostIdCompany
     *
     * @return integer 
     */
    public function getArtPrecCostIdCompany()
    {
        return $this->ArtPrecCostIdCompany;
    }

    /**
     * Set ArtPrecCostCodart
     *
     * @param integer $artPrecCostCodart
     * @return ArticulosPreciosCostos
     */
    public function setArtPrecCostCodart($artPrecCostCodart)
    {
        $this->ArtPrecCostCodart = $artPrecCostCodart;
    
        return $this;
    }

    /**
     * Get ArtPrecCostCodart
     *
     * @return integer 
     */
    public function getArtPrecCostCodart()
    {
        return $this->ArtPrecCostCodart;
    }

    /**
     * Set ArtPrecCostNroOrden
     *
     * @param integer $artPrecCostNroOrden
     * @return ArticulosPreciosCostos
     */
    public function setArtPrecCostNroOrden($artPrecCostNroOrden)
    {
        $this->ArtPrecCostNroOrden = $artPrecCostNroOrden;
    
        return $this;
    }

    /**
     * Get ArtPrecCostNroOrden
     *
     * @return integer 
     */
    public function getArtPrecCostNroOrden()
    {
        return $this->ArtPrecCostNroOrden;
    }

    /**
     * Set ArtPrecCostDetalle
     *
     * @param string $artPrecCostDetalle
     * @return ArticulosPreciosCostos
     */
    public function setArtPrecCostDetalle($artPrecCostDetalle)
    {
        $this->ArtPrecCostDetalle = $artPrecCostDetalle;
    
        return $this;
    }

    /**
     * Get ArtPrecCostDetalle
     *
     * @return string 
     */
    public function getArtPrecCostDetalle()
    {
        return $this->ArtPrecCostDetalle;
    }

    /**
     * Set ArtPrecCostValor
     *
     * @param string $artPrecCostValor
     * @return ArticulosPreciosCostos
     */
    public function setArtPrecCostValor($artPrecCostValor)
    {
        $this->ArtPrecCostValor = $artPrecCostValor;
    
        return $this;
    }

    /**
     * Get ArtPrecCostValor
     *
     * @return string 
     */
    public function getArtPrecCostValor()
    {
        return $this->ArtPrecCostValor;
    }

    /**
     * Set ArtPrecCostMoneda
     *
     * @param string $artPrecCostMoneda
     * @return ArticulosPreciosCostos
     */
    public function setArtPrecCostMoneda($artPrecCostMoneda)
    {
        $this->ArtPrecCostMoneda = $artPrecCostMoneda;
    
        return $this;
    }

    /**
     * Get ArtPrecCostMoneda
     *
     * @return string 
     */
    public function getArtPrecCostMoneda()
    {
        return $this->ArtPrecCostMoneda;
    }

    /**
     * Set ArtPrecCostIdentificador
     *
     * @param string $artPrecCostIdentificador
     * @return ArticulosPreciosCostos
     */
    public function setArtPrecCostIdentificador($artPrecCostIdentificador)
    {
        $this->ArtPrecCostIdentificador = $artPrecCostIdentificador;
    
        return $this;
    }

    /**
     * Get ArtPrecCostIdentificador
     *
     * @return string 
     */
    public function getArtPrecCostIdentificador()
    {
        return $this->ArtPrecCostIdentificador;
    }
}
