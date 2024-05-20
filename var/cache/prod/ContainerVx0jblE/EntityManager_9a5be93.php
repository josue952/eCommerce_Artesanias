<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c195 = null;
    private $initializer31637 = null;
    private static $publicProperties351ca = [
        
    ];
    public function getConnection()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getConnection', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getMetadataFactory', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getExpressionBuilder', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'beginTransaction', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getCache', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getCache();
    }
    public function transactional($func)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'transactional', array('func' => $func), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'wrapInTransaction', array('func' => $func), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'commit', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->commit();
    }
    public function rollback()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'rollback', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getClassMetadata', array('className' => $className), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'createQuery', array('dql' => $dql), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'createNamedQuery', array('name' => $name), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'createQueryBuilder', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'flush', array('entity' => $entity), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'clear', array('entityName' => $entityName), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->clear($entityName);
    }
    public function close()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'close', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->close();
    }
    public function persist($entity)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'persist', array('entity' => $entity), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'remove', array('entity' => $entity), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'refresh', array('entity' => $entity), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'detach', array('entity' => $entity), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'merge', array('entity' => $entity), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getRepository', array('entityName' => $entityName), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'contains', array('entity' => $entity), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getEventManager', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getConfiguration', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'isOpen', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getUnitOfWork', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getProxyFactory', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'initializeObject', array('obj' => $obj), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'getFilters', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'isFiltersStateClean', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'hasFilters', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return $this->valueHolder8c195->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer31637 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8c195) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8c195 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8c195->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, '__get', ['name' => $name], $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        if (isset(self::$publicProperties351ca[$name])) {
            return $this->valueHolder8c195->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c195;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8c195;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c195;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8c195;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, '__isset', array('name' => $name), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c195;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8c195;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, '__unset', array('name' => $name), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c195;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8c195;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, '__clone', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        $this->valueHolder8c195 = clone $this->valueHolder8c195;
    }
    public function __sleep()
    {
        $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, '__sleep', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
        return array('valueHolder8c195');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer31637 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer31637;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer31637 && ($this->initializer31637->__invoke($valueHolder8c195, $this, 'initializeProxy', array(), $this->initializer31637) || 1) && $this->valueHolder8c195 = $valueHolder8c195;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c195;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c195;
    }
}
