<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\User' . "\0" . 'hash', '' . "\0" . 'App\\Entity\\User' . "\0" . 'confirmPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'introduction', '' . "\0" . 'App\\Entity\\User' . "\0" . 'description', '' . "\0" . 'App\\Entity\\User' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ads', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userRoles'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\User' . "\0" . 'hash', '' . "\0" . 'App\\Entity\\User' . "\0" . 'confirmPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'introduction', '' . "\0" . 'App\\Entity\\User' . "\0" . 'description', '' . "\0" . 'App\\Entity\\User' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ads', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userRoles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function initSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initSlug', []);

        return parent::initSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture(?string $picture): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getHash(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHash', []);

        return parent::getHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setHash(string $hash): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHash', [$hash]);

        return parent::setHash($hash);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmPassword', []);

        return parent::getConfirmPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmPassword(string $confirmPassword): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmPassword', [$confirmPassword]);

        return parent::setConfirmPassword($confirmPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntroduction(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntroduction', []);

        return parent::getIntroduction();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntroduction(string $introduction): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntroduction', [$introduction]);

        return parent::setIntroduction($introduction);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getAds(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAds', []);

        return parent::getAds();
    }

    /**
     * {@inheritDoc}
     */
    public function addAd(\App\Entity\Ad $ad): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAd', [$ad]);

        return parent::addAd($ad);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAd(\App\Entity\Ad $ad): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAd', [$ad]);

        return parent::removeAd($ad);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRoles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRoles', []);

        return parent::getUserRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserRole(\App\Entity\Role $userRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserRole', [$userRole]);

        return parent::addUserRole($userRole);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserRole(\App\Entity\Role $userRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserRole', [$userRole]);

        return parent::removeUserRole($userRole);
    }

}
