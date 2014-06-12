<?php

namespace Materiaweb\MateriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulos
 */
class Articulos
{
	private $articuloId;
	private $articuloIdCompany;
	private $articuloCodart;
	private $articuloCodartAlternativo;
	private $articuloCategoria;
	private $articuloCodigoFamilia;
	private $articuloNombre;
	private $articuloNombreReduc;
	private $articuloUnidad;
	private $articuloCantxBulto;
	private $articuloBultoxPallet;
	private $articuloKgsUnidad;
	private $articuloCodAlicuota;
	private $articuloPuntoContVenta;
	private $articuloPuntoContCompra;
	private $articuloExistMinima;
	private $articuloExistMaxima;
	private $articuloCodigoBarra;
	private $articuloPresentacion;

    /**
     * Get articuloCodart
     *
     * @return integer 
     */
    public function getArticuloCodart()
    {
        return $this->articuloCodart;
    }

    /**
     * Set articuloIdCompany
     *
     * @param integer $articuloIdCompany
     * @return Articulos
     */
    public function setArticuloIdCompany($articuloIdCompany)
    {
        $this->articuloIdCompany = $articuloIdCompany;
    
        return $this;
    }

    /**
     * Get articuloIdCompany
     *
     * @return integer 
     */
    public function getArticuloIdCompany()
    {
        return $this->articuloIdCompany;
    }

    /**
     * Set articuloCodartAlternativo
     *
     * @param integer $articuloCodartAlternativo
     * @return Articulos
     */
    public function setArticuloCodartAlternativo($articuloCodartAlternativo)
    {
        $this->articuloCodartAlternativo = $articuloCodartAlternativo;
    
        return $this;
    }

    /**
     * Get articuloCodartAlternativo
     *
     * @return integer 
     */
    public function getArticuloCodartAlternativo()
    {
        return $this->articuloCodartAlternativo;
    }

    /**
     * Set articuloCodigoFamilia
     *
     * @param integer $articuloCodigoFamilia
     * @return Articulos
     */
    public function setArticuloCodigoFamilia($articuloCodigoFamilia)
    {
        $this->articuloCodigoFamilia = $articuloCodigoFamilia;
    
        return $this;
    }

    /**
     * Get articuloCodigoFamilia
     *
     * @return integer 
     */
    public function getArticuloCodigoFamilia()
    {
        return $this->articuloCodigoFamilia;
    }

    /**
     * Set articuloCategoria
     *
     * @param integer $articuloCategoria
     * @return Articulos
     */
    public function setArticuloCategoria($articuloCategoria)
    {
        $this->articuloCategoria = $articuloCategoria;
    
        return $this;
    }

    /**
     * Get articuloCategoria
     *
     * @return integer 
     */
    public function getArticuloCategoria()
    {
        return $this->articuloCategoria;
    }

    /**
     * Set articuloNombre
     *
     * @param string $articuloNombre
     * @return Articulos
     */
    public function setArticuloNombre($articuloNombre)
    {
        $this->articuloNombre = $articuloNombre;
    
        return $this;
    }

    /**
     * Get articuloNombre
     *
     * @return string 
     */
    public function getArticuloNombre()
    {
        return $this->articuloNombre;
    }

    /**
     * Set articuloNombreReduc
     *
     * @param string $articuloNombreReduc
     * @return Articulos
     */
    public function setArticuloNombreReduc($articuloNombreReduc)
    {
        $this->articuloNombreReduc = $articuloNombreReduc;
    
        return $this;
    }

    /**
     * Get articuloNombreReduc
     *
     * @return string 
     */
    public function getArticuloNombreReduc()
    {
        return $this->articuloNombreReduc;
    }

    /**
     * Set articuloUnidad
     *
     * @param string $articuloUnidad
     * @return Articulos
     */
    public function setArticuloUnidad($articuloUnidad)
    {
        $this->articuloUnidad = $articuloUnidad;
    
        return $this;
    }

    /**
     * Get articuloUnidad
     *
     * @return string 
     */
    public function getArticuloUnidad()
    {
        return $this->articuloUnidad;
    }

    /**
     * Set articuloCantxBulto
     *
     * @param integer $articuloCantxBulto
     * @return Articulos
     */
    public function setArticuloCantxBulto($articuloCantxBulto)
    {
        $this->articuloCantxBulto = $articuloCantxBulto;
    
        return $this;
    }

    /**
     * Get articuloCantxBulto
     *
     * @return integer 
     */
    public function getArticuloCantxBulto()
    {
        return $this->articuloCantxBulto;
    }

    /**
     * Set articuloBultoxPallet
     *
     * @param integer $articuloBultoxPallet
     * @return Articulos
     */
    public function setArticuloBultoxPallet($articuloBultoxPallet)
    {
        $this->articuloBultoxPallet = $articuloBultoxPallet;
    
        return $this;
    }

    /**
     * Get articuloBultoxPallet
     *
     * @return integer 
     */
    public function getArticuloBultoxPallet()
    {
        return $this->articuloBultoxPallet;
    }

    /**
     * Set articuloKgsUnidad
     *
     * @param string $articuloKgsUnidad
     * @return Articulos
     */
    public function setArticuloKgsUnidad($articuloKgsUnidad)
    {
        $this->articuloKgsUnidad = $articuloKgsUnidad;
    
        return $this;
    }

    /**
     * Get articuloKgsUnidad
     *
     * @return string 
     */
    public function getArticuloKgsUnidad()
    {
        return $this->articuloKgsUnidad;
    }

    /**
     * Set articuloCodAlicuota
     *
     * @param integer $articuloCodAlicuota
     * @return Articulos
     */
    public function setArticuloCodAlicuota($articuloCodAlicuota)
    {
        $this->articuloCodAlicuota = $articuloCodAlicuota;
    
        return $this;
    }

    /**
     * Get articuloCodAlicuota
     *
     * @return integer 
     */
    public function getArticuloCodAlicuota()
    {
        return $this->articuloCodAlicuota;
    }

    /**
     * Set articuloPuntoContVenta
     *
     * @param string $articuloPuntoContVenta
     * @return Articulos
     */
    public function setArticuloPuntoContVenta($articuloPuntoContVenta)
    {
        $this->articuloPuntoContVenta = $articuloPuntoContVenta;
    
        return $this;
    }

    /**
     * Get articuloPuntoContVenta
     *
     * @return string 
     */
    public function getArticuloPuntoContVenta()
    {
        return $this->articuloPuntoContVenta;
    }

    /**
     * Set articuloPuntoContCompra
     *
     * @param string $articuloPuntoContCompra
     * @return Articulos
     */
    public function setArticuloPuntoContCompra($articuloPuntoContCompra)
    {
        $this->articuloPuntoContCompra = $articuloPuntoContCompra;
    
        return $this;
    }

    /**
     * Get articuloPuntoContCompra
     *
     * @return string 
     */
    public function getArticuloPuntoContCompra()
    {
        return $this->articuloPuntoContCompra;
    }

    /**
     * Set articuloExistMinima
     *
     * @param string $articuloExistMinima
     * @return Articulos
     */
    public function setArticuloExistMinima($articuloExistMinima)
    {
        $this->articuloExistMinima = $articuloExistMinima;
    
        return $this;
    }

    /**
     * Get articuloExistMinima
     *
     * @return string 
     */
    public function getArticuloExistMinima()
    {
        return $this->articuloExistMinima;
    }

    /**
     * Set articuloExistMaxima
     *
     * @param string $articuloExistMaxima
     * @return Articulos
     */
    public function setArticuloExistMaxima($articuloExistMaxima)
    {
        $this->articuloExistMaxima = $articuloExistMaxima;
    
        return $this;
    }

    /**
     * Get articuloExistMaxima
     *
     * @return string 
     */
    public function getArticuloExistMaxima()
    {
        return $this->articuloExistMaxima;
    }

    /**
     * Set articuloCodigoBarra
     *
     * @param string $articuloCodigoBarra
     * @return Articulos
     */
    public function setArticuloCodigoBarra($articuloCodigoBarra)
    {
        $this->articuloCodigoBarra = $articuloCodigoBarra;
    
        return $this;
    }

    /**
     * Get articuloCodigoBarra
     *
     * @return string 
     */
    public function getArticuloCodigoBarra()
    {
        return $this->articuloCodigoBarra;
    }

    /**
     * Set articuloPresentacion
     *
     * @param string $articuloPresentacion
     * @return Articulos
     */
    public function setArticuloPresentacion($articuloPresentacion)
    {
        $this->articuloPresentacion = $articuloPresentacion;
    
        return $this;
    }

    /**
     * Get articuloPresentacion
     *
     * @return string 
     */
    public function getArticuloPresentacion()
    {
        return $this->articuloPresentacion;
    }
}
