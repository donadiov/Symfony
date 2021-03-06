<?php

namespace Proxies\__CG__\Materiaweb\MateriaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ArticulosDescuentos extends \Materiaweb\MateriaBundle\Entity\ArticulosDescuentos implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'ArtDescIdTabla', 'ArtDescCodart', 'ArtDescNroOrden', 'ArtDescDetalle', 'ArtDescValor', 'ArtDescIdCompany');
        }

        return array('__isInitialized__', 'ArtDescIdTabla', 'ArtDescCodart', 'ArtDescNroOrden', 'ArtDescDetalle', 'ArtDescValor', 'ArtDescIdCompany');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ArticulosDescuentos $proxy) {
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
    public function getArtDescIdTabla()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtDescIdTabla', array());

        return parent::getArtDescIdTabla();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtDescCodart($artDescCodart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtDescCodart', array($artDescCodart));

        return parent::setArtDescCodart($artDescCodart);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtDescCodart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtDescCodart', array());

        return parent::getArtDescCodart();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtDescNroOrden($artDescNroOrden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtDescNroOrden', array($artDescNroOrden));

        return parent::setArtDescNroOrden($artDescNroOrden);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtDescNroOrden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtDescNroOrden', array());

        return parent::getArtDescNroOrden();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtDescDetalle($artDescDetalle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtDescDetalle', array($artDescDetalle));

        return parent::setArtDescDetalle($artDescDetalle);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtDescDetalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtDescDetalle', array());

        return parent::getArtDescDetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtDescValor($artDescValor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtDescValor', array($artDescValor));

        return parent::setArtDescValor($artDescValor);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtDescValor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtDescValor', array());

        return parent::getArtDescValor();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtDescIdCompany($artDescIdCompany)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtDescIdCompany', array($artDescIdCompany));

        return parent::setArtDescIdCompany($artDescIdCompany);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtDescIdCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtDescIdCompany', array());

        return parent::getArtDescIdCompany();
    }

}
