<?php

namespace Proxies\__CG__\LineasTelefonicas\Policia\ERBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Historico extends \LineasTelefonicas\Policia\ERBundle\Entity\Historico implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'historicoId', 'lineaHistoricoNumero', 'lineaHistoricoEmpresa', 'lineaHistoricoPlan', 'lineaHistoricoDestino', 'lineaHistoricoCargo', 'lineaHistoricoIMEI', 'lineaHistoricoMarca', 'lineaHistoricoModelo', 'lineaHistoricoUltimoCambio', 'lineaHistoricoVoz', 'lineaHistoricoSms', 'lineaHistoricoGprs', 'lineaHistoricoDatos', 'lineaHistoricoBlackberry', 'lineaHistoricoRoaming', 'lineaHistoricoObservaciones', 'lineaHistoricoAccion', 'lineaHistoricoUsuario');
        }

        return array('__isInitialized__', 'historicoId', 'lineaHistoricoNumero', 'lineaHistoricoEmpresa', 'lineaHistoricoPlan', 'lineaHistoricoDestino', 'lineaHistoricoCargo', 'lineaHistoricoIMEI', 'lineaHistoricoMarca', 'lineaHistoricoModelo', 'lineaHistoricoUltimoCambio', 'lineaHistoricoVoz', 'lineaHistoricoSms', 'lineaHistoricoGprs', 'lineaHistoricoDatos', 'lineaHistoricoBlackberry', 'lineaHistoricoRoaming', 'lineaHistoricoObservaciones', 'lineaHistoricoAccion', 'lineaHistoricoUsuario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Historico $proxy) {
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
    public function getHistoricoId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getHistoricoId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHistoricoId', array());

        return parent::getHistoricoId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoNumero($lineaHistoricoNumero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoNumero', array($lineaHistoricoNumero));

        return parent::setLineaHistoricoNumero($lineaHistoricoNumero);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoNumero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoNumero', array());

        return parent::getLineaHistoricoNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoEmpresa($lineaHistoricoEmpresa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoEmpresa', array($lineaHistoricoEmpresa));

        return parent::setLineaHistoricoEmpresa($lineaHistoricoEmpresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoEmpresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoEmpresa', array());

        return parent::getLineaHistoricoEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoPlan($lineaHistoricoPlan)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoPlan', array($lineaHistoricoPlan));

        return parent::setLineaHistoricoPlan($lineaHistoricoPlan);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoPlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoPlan', array());

        return parent::getLineaHistoricoPlan();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoDestino($lineaHistoricoDestino)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoDestino', array($lineaHistoricoDestino));

        return parent::setLineaHistoricoDestino($lineaHistoricoDestino);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoDestino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoDestino', array());

        return parent::getLineaHistoricoDestino();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoCargo($lineaHistoricoCargo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoCargo', array($lineaHistoricoCargo));

        return parent::setLineaHistoricoCargo($lineaHistoricoCargo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoCargo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoCargo', array());

        return parent::getLineaHistoricoCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoIMEI($lineaHistoricoIMEI)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoIMEI', array($lineaHistoricoIMEI));

        return parent::setLineaHistoricoIMEI($lineaHistoricoIMEI);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoIMEI()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoIMEI', array());

        return parent::getLineaHistoricoIMEI();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoMarca($lineaHistoricoMarca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoMarca', array($lineaHistoricoMarca));

        return parent::setLineaHistoricoMarca($lineaHistoricoMarca);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoMarca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoMarca', array());

        return parent::getLineaHistoricoMarca();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoModelo($lineaHistoricoModelo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoModelo', array($lineaHistoricoModelo));

        return parent::setLineaHistoricoModelo($lineaHistoricoModelo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoModelo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoModelo', array());

        return parent::getLineaHistoricoModelo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoUltimoCambio($lineaHistoricoUltimoCambio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoUltimoCambio', array($lineaHistoricoUltimoCambio));

        return parent::setLineaHistoricoUltimoCambio($lineaHistoricoUltimoCambio);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoUltimoCambio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoUltimoCambio', array());

        return parent::getLineaHistoricoUltimoCambio();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoVoz($lineaHistoricoVoz)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoVoz', array($lineaHistoricoVoz));

        return parent::setLineaHistoricoVoz($lineaHistoricoVoz);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoVoz()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoVoz', array());

        return parent::getLineaHistoricoVoz();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoSms($lineaHistoricoSms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoSms', array($lineaHistoricoSms));

        return parent::setLineaHistoricoSms($lineaHistoricoSms);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoSms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoSms', array());

        return parent::getLineaHistoricoSms();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoGprs($lineaHistoricoGprs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoGprs', array($lineaHistoricoGprs));

        return parent::setLineaHistoricoGprs($lineaHistoricoGprs);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoGprs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoGprs', array());

        return parent::getLineaHistoricoGprs();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoDatos($lineaHistoricoDatos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoDatos', array($lineaHistoricoDatos));

        return parent::setLineaHistoricoDatos($lineaHistoricoDatos);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoDatos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoDatos', array());

        return parent::getLineaHistoricoDatos();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoBlackberry($lineaHistoricoBlackberry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoBlackberry', array($lineaHistoricoBlackberry));

        return parent::setLineaHistoricoBlackberry($lineaHistoricoBlackberry);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoBlackberry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoBlackberry', array());

        return parent::getLineaHistoricoBlackberry();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoRoaming($lineaHistoricoRoaming)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoRoaming', array($lineaHistoricoRoaming));

        return parent::setLineaHistoricoRoaming($lineaHistoricoRoaming);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoRoaming()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoRoaming', array());

        return parent::getLineaHistoricoRoaming();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoObservaciones($lineaHistoricoObservaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoObservaciones', array($lineaHistoricoObservaciones));

        return parent::setLineaHistoricoObservaciones($lineaHistoricoObservaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoObservaciones', array());

        return parent::getLineaHistoricoObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoAccion($lineaHistoricoAccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoAccion', array($lineaHistoricoAccion));

        return parent::setLineaHistoricoAccion($lineaHistoricoAccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoAccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoAccion', array());

        return parent::getLineaHistoricoAccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setLineaHistoricoUsuario($lineaHistoricoUsuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLineaHistoricoUsuario', array($lineaHistoricoUsuario));

        return parent::setLineaHistoricoUsuario($lineaHistoricoUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getLineaHistoricoUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLineaHistoricoUsuario', array());

        return parent::getLineaHistoricoUsuario();
    }

}
