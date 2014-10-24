<?php

namespace Proxies\__CG__\ItoSoftware\Base\ModelBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ComentarioEvento extends \ItoSoftware\Base\ModelBundle\Entity\ComentarioEvento implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'texto', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'created_at', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'updated_at', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'id', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'User', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'evento', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'calificacion');
        }

        return array('__isInitialized__', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'texto', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'created_at', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'updated_at', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'id', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'User', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'evento', '' . "\0" . 'ItoSoftware\\Base\\ModelBundle\\Entity\\ComentarioEvento' . "\0" . 'calificacion');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ComentarioEvento $proxy) {
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
    public function setCreatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAtValue', array());

        return parent::setCreatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAtValue', array());

        return parent::setUpdatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setTexto($texto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTexto', array($texto));

        return parent::setTexto($texto);
    }

    /**
     * {@inheritDoc}
     */
    public function getTexto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTexto', array());

        return parent::getTexto();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\ItoSoftware\Base\ModelBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvento(\ItoSoftware\Base\ModelBundle\Entity\Evento $evento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvento', array($evento));

        return parent::setEvento($evento);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvento', array());

        return parent::getEvento();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalificacion($calificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalificacion', array($calificacion));

        return parent::setCalificacion($calificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalificacion', array());

        return parent::getCalificacion();
    }

}
