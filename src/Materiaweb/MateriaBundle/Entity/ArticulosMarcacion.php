<?php

namespace Materiaweb\MateriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosMarcacion
 */
class ArticulosMarcacion
{
	
	private $ArtDescIdTabla;
	private $ArtDescIdCompany;
	private $ArtDescCodart;
	private $ArtDescNroOrden;
	private $ArtDescDetalle;
	private $ArtDescValor;
    /**
     * @var integer
     */
    private $ArtMarcIdTabla;

    /**
     * @var integer
     */
    private $ArtMarcCodart;

    /**
     * @var integer
     */
    private $ArtMarcNroOrden;

    /**
     * @var string
     */
    private $ArtMarcDetalle;

    /**
     * @var string
     */
    private $ArtMarcPrecioNetoOrigen1;

    /**
     * @var string
     */
    private $ArtMarcAdicAntesCalc;

    /**
     * @var string
     */
    private $ArtMarcPrecioNetoOrigen2;

    /**
     * @var string
     */
    private $ArtMarcValor;

    /**
     * @var string
     */
    private $ArtMarcPrecioNetoCalculado;

    /**
     * @var string
     */
    private $ArtMarcAlicutaImp1;

    /**
     * @var string
     */
    private $ArtMarcValorImp1;

    /**
     * @var string
     */
    private $ArtMarcAlicutaImp2;

    /**
     * @var string
     */
    private $ArtMarcValorImp2;

    /**
     * @var string
     */
    private $ArtMarcAlicutaImp3;

    /**
     * @var string
     */
    private $ArtMarcValorImp3;

    /**
     * @var string
     */
    private $ArtMarcPrecioFinalCalculado;

    /**
     * @var string
     */
    private $ArtMarcAdicDpsCalculo;

    /**
     * @var string
     */
    private $ArtMarcPrecioFinal;


    /**
     * Get ArtMarcIdTabla
     *
     * @return integer 
     */
    public function getArtMarcIdTabla()
    {
        return $this->ArtMarcIdTabla;
    }

    /**
     * Set ArtMarcCodart
     *
     * @param integer $artMarcCodart
     * @return ArticulosMarcacion
     */
    public function setArtMarcCodart($artMarcCodart)
    {
        $this->ArtMarcCodart = $artMarcCodart;
    
        return $this;
    }

    /**
     * Get ArtMarcCodart
     *
     * @return integer 
     */
    public function getArtMarcCodart()
    {
        return $this->ArtMarcCodart;
    }

    /**
     * Set ArtMarcNroOrden
     *
     * @param integer $artMarcNroOrden
     * @return ArticulosMarcacion
     */
    public function setArtMarcNroOrden($artMarcNroOrden)
    {
        $this->ArtMarcNroOrden = $artMarcNroOrden;
    
        return $this;
    }

    /**
     * Get ArtMarcNroOrden
     *
     * @return integer 
     */
    public function getArtMarcNroOrden()
    {
        return $this->ArtMarcNroOrden;
    }

    /**
     * Set ArtMarcDetalle
     *
     * @param string $artMarcDetalle
     * @return ArticulosMarcacion
     */
    public function setArtMarcDetalle($artMarcDetalle)
    {
        $this->ArtMarcDetalle = $artMarcDetalle;
    
        return $this;
    }

    /**
     * Get ArtMarcDetalle
     *
     * @return string 
     */
    public function getArtMarcDetalle()
    {
        return $this->ArtMarcDetalle;
    }

    /**
     * Set ArtMarcPrecioNetoOrigen1
     *
     * @param string $artMarcPrecioNetoOrigen1
     * @return ArticulosMarcacion
     */
    public function setArtMarcPrecioNetoOrigen1($artMarcPrecioNetoOrigen1)
    {
        $this->ArtMarcPrecioNetoOrigen1 = $artMarcPrecioNetoOrigen1;
    
        return $this;
    }

    /**
     * Get ArtMarcPrecioNetoOrigen1
     *
     * @return string 
     */
    public function getArtMarcPrecioNetoOrigen1()
    {
        return $this->ArtMarcPrecioNetoOrigen1;
    }

    /**
     * Set ArtMarcAdicAntesCalc
     *
     * @param string $artMarcAdicAntesCalc
     * @return ArticulosMarcacion
     */
    public function setArtMarcAdicAntesCalc($artMarcAdicAntesCalc)
    {
        $this->ArtMarcAdicAntesCalc = $artMarcAdicAntesCalc;
    
        return $this;
    }

    /**
     * Get ArtMarcAdicAntesCalc
     *
     * @return string 
     */
    public function getArtMarcAdicAntesCalc()
    {
        return $this->ArtMarcAdicAntesCalc;
    }

    /**
     * Set ArtMarcPrecioNetoOrigen2
     *
     * @param string $artMarcPrecioNetoOrigen2
     * @return ArticulosMarcacion
     */
    public function setArtMarcPrecioNetoOrigen2($artMarcPrecioNetoOrigen2)
    {
        $this->ArtMarcPrecioNetoOrigen2 = $artMarcPrecioNetoOrigen2;
    
        return $this;
    }

    /**
     * Get ArtMarcPrecioNetoOrigen2
     *
     * @return string 
     */
    public function getArtMarcPrecioNetoOrigen2()
    {
        return $this->ArtMarcPrecioNetoOrigen2;
    }

    /**
     * Set ArtMarcValor
     *
     * @param string $artMarcValor
     * @return ArticulosMarcacion
     */
    public function setArtMarcValor($artMarcValor)
    {
        $this->ArtMarcValor = $artMarcValor;
    
        return $this;
    }

    /**
     * Get ArtMarcValor
     *
     * @return string 
     */
    public function getArtMarcValor()
    {
        return $this->ArtMarcValor;
    }

    /**
     * Set ArtMarcPrecioNetoCalculado
     *
     * @param string $artMarcPrecioNetoCalculado
     * @return ArticulosMarcacion
     */
    public function setArtMarcPrecioNetoCalculado($artMarcPrecioNetoCalculado)
    {
        $this->ArtMarcPrecioNetoCalculado = $artMarcPrecioNetoCalculado;
    
        return $this;
    }

    /**
     * Get ArtMarcPrecioNetoCalculado
     *
     * @return string 
     */
    public function getArtMarcPrecioNetoCalculado()
    {
        return $this->ArtMarcPrecioNetoCalculado;
    }

    /**
     * Set ArtMarcAlicutaImp1
     *
     * @param string $artMarcAlicutaImp1
     * @return ArticulosMarcacion
     */
    public function setArtMarcAlicutaImp1($artMarcAlicutaImp1)
    {
        $this->ArtMarcAlicutaImp1 = $artMarcAlicutaImp1;
    
        return $this;
    }

    /**
     * Get ArtMarcAlicutaImp1
     *
     * @return string 
     */
    public function getArtMarcAlicutaImp1()
    {
        return $this->ArtMarcAlicutaImp1;
    }

    /**
     * Set ArtMarcValorImp1
     *
     * @param string $artMarcValorImp1
     * @return ArticulosMarcacion
     */
    public function setArtMarcValorImp1($artMarcValorImp1)
    {
        $this->ArtMarcValorImp1 = $artMarcValorImp1;
    
        return $this;
    }

    /**
     * Get ArtMarcValorImp1
     *
     * @return string 
     */
    public function getArtMarcValorImp1()
    {
        return $this->ArtMarcValorImp1;
    }

    /**
     * Set ArtMarcAlicutaImp2
     *
     * @param string $artMarcAlicutaImp2
     * @return ArticulosMarcacion
     */
    public function setArtMarcAlicutaImp2($artMarcAlicutaImp2)
    {
        $this->ArtMarcAlicutaImp2 = $artMarcAlicutaImp2;
    
        return $this;
    }

    /**
     * Get ArtMarcAlicutaImp2
     *
     * @return string 
     */
    public function getArtMarcAlicutaImp2()
    {
        return $this->ArtMarcAlicutaImp2;
    }

    /**
     * Set ArtMarcValorImp2
     *
     * @param string $artMarcValorImp2
     * @return ArticulosMarcacion
     */
    public function setArtMarcValorImp2($artMarcValorImp2)
    {
        $this->ArtMarcValorImp2 = $artMarcValorImp2;
    
        return $this;
    }

    /**
     * Get ArtMarcValorImp2
     *
     * @return string 
     */
    public function getArtMarcValorImp2()
    {
        return $this->ArtMarcValorImp2;
    }

    /**
     * Set ArtMarcAlicutaImp3
     *
     * @param string $artMarcAlicutaImp3
     * @return ArticulosMarcacion
     */
    public function setArtMarcAlicutaImp3($artMarcAlicutaImp3)
    {
        $this->ArtMarcAlicutaImp3 = $artMarcAlicutaImp3;
    
        return $this;
    }

    /**
     * Get ArtMarcAlicutaImp3
     *
     * @return string 
     */
    public function getArtMarcAlicutaImp3()
    {
        return $this->ArtMarcAlicutaImp3;
    }

    /**
     * Set ArtMarcValorImp3
     *
     * @param string $artMarcValorImp3
     * @return ArticulosMarcacion
     */
    public function setArtMarcValorImp3($artMarcValorImp3)
    {
        $this->ArtMarcValorImp3 = $artMarcValorImp3;
    
        return $this;
    }

    /**
     * Get ArtMarcValorImp3
     *
     * @return string 
     */
    public function getArtMarcValorImp3()
    {
        return $this->ArtMarcValorImp3;
    }

    /**
     * Set ArtMarcPrecioFinalCalculado
     *
     * @param string $artMarcPrecioFinalCalculado
     * @return ArticulosMarcacion
     */
    public function setArtMarcPrecioFinalCalculado($artMarcPrecioFinalCalculado)
    {
        $this->ArtMarcPrecioFinalCalculado = $artMarcPrecioFinalCalculado;
    
        return $this;
    }

    /**
     * Get ArtMarcPrecioFinalCalculado
     *
     * @return string 
     */
    public function getArtMarcPrecioFinalCalculado()
    {
        return $this->ArtMarcPrecioFinalCalculado;
    }

    /**
     * Set ArtMarcAdicDpsCalculo
     *
     * @param string $artMarcAdicDpsCalculo
     * @return ArticulosMarcacion
     */
    public function setArtMarcAdicDpsCalculo($artMarcAdicDpsCalculo)
    {
        $this->ArtMarcAdicDpsCalculo = $artMarcAdicDpsCalculo;
    
        return $this;
    }

    /**
     * Get ArtMarcAdicDpsCalculo
     *
     * @return string 
     */
    public function getArtMarcAdicDpsCalculo()
    {
        return $this->ArtMarcAdicDpsCalculo;
    }

    /**
     * Set ArtMarcPrecioFinal
     *
     * @param string $artMarcPrecioFinal
     * @return ArticulosMarcacion
     */
    public function setArtMarcPrecioFinal($artMarcPrecioFinal)
    {
        $this->ArtMarcPrecioFinal = $artMarcPrecioFinal;
    
        return $this;
    }

    /**
     * Get ArtMarcPrecioFinal
     *
     * @return string 
     */
    public function getArtMarcPrecioFinal()
    {
        return $this->ArtMarcPrecioFinal;
    }
}
