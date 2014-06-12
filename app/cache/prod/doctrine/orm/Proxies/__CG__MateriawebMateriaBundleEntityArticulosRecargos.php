<?php

namespace Proxies\__CG__\Materiaweb\MateriaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ArticulosRecargos extends \Materiaweb\MateriaBundle\Entity\ArticulosRecargos implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'ArtRecIdTabla', 'ArtRecIdCompany', 'ArtRecCodart', 'ArtRecNroOrden', 'ArtRecDetalle', 'ArtRecValor');
        }

        return array('__isInitialized__', 'ArtRecIdTabla', 'ArtRecIdCompany', 'ArtRecCodart', 'ArtRecNroOrden', 'ArtRecDetalle', 'ArtRecValor');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ArticulosRecargos $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getArtRecIdTabla()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtRecIdTabla', array());

        return parent::getArtRecIdTabla();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtRecIdCompany($artRecIdCompany)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtRecIdCompany', array($artRecIdCompany));

        return parent::setArtRecIdCompany($artRecIdCompany);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtRecIdCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtRecIdCompany', array());

        return parent::getArtRecIdCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtRecCodart($artRecCodart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtRecCodart', array($artRecCodart));

        return parent::setArtRecCodart($artRecCodart);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtRecCodart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtRecCodart', array());

        return parent::getArtRecCodart();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtRecNroOrden($artRecNroOrden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtRecNroOrden', array($artRecNroOrden));

        return parent::setArtRecNroOrden($artRecNroOrden);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtRecNroOrden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtRecNroOrden', array());

        return parent::getArtRecNroOrden();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtRecDetalle($artRecDetalle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtRecDetalle', array($artRecDetalle));

        return parent::setArtRecDetalle($artRecDetalle);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtRecDetalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtRecDetalle', array());

        return parent::getArtRecDetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtRecValor($artRecValor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtRecValor', array($artRecValor));

        return parent::setArtRecValor($artRecValor);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtRecValor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtRecValor', array());

        return parent::getArtRecValor();
    }

}
