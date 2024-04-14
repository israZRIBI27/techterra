<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Threads extends \App\Entity\Threads implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'threadId', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'replies', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'votes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'threadId', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'content', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'replies', '' . "\0" . 'App\\Entity\\Threads' . "\0" . 'votes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Threads $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getThreadId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getThreadId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThreadId', []);

        return parent::getThreadId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(?string $content): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?\App\Entity\Topics
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(?\App\Entity\Topics $category): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getReplies(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplies', []);

        return parent::getReplies();
    }

    /**
     * {@inheritDoc}
     */
    public function addReply(\App\Entity\Replies $reply): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReply', [$reply]);

        return parent::addReply($reply);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReply(\App\Entity\Replies $reply): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReply', [$reply]);

        return parent::removeReply($reply);
    }

    /**
     * {@inheritDoc}
     */
    public function getVotes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVotes', []);

        return parent::getVotes();
    }

    /**
     * {@inheritDoc}
     */
    public function addVote(\App\Entity\Votes $vote): \App\Entity\Threads
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVote', [$vote]);

        return parent::addVote($vote);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVote(\App\Entity\Votes $vote): \App\Entity\Threads
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVote', [$vote]);

        return parent::removeVote($vote);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function isLikedByUser(\App\Entity\User $user): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLikedByUser', [$user]);

        return parent::isLikedByUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function countVotesAsString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countVotesAsString', []);

        return parent::countVotesAsString();
    }

}
