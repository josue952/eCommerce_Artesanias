<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder09c3b = null;
    private $initializer28145 = null;
    private static $publicPropertiesce9f8 = [
        
    ];
    public function getConnection()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getConnection', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getMetadataFactory', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getExpressionBuilder', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'beginTransaction', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getCache', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getCache();
    }
    public function transactional($func)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'transactional', array('func' => $func), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'commit', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->commit();
    }
    public function rollback()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'rollback', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getClassMetadata', array('className' => $className), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'createQuery', array('dql' => $dql), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'createNamedQuery', array('name' => $name), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'createQueryBuilder', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'flush', array('entity' => $entity), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'clear', array('entityName' => $entityName), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->clear($entityName);
    }
    public function close()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'close', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->close();
    }
    public function persist($entity)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'persist', array('entity' => $entity), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'remove', array('entity' => $entity), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'refresh', array('entity' => $entity), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'detach', array('entity' => $entity), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'merge', array('entity' => $entity), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'contains', array('entity' => $entity), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getEventManager', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getConfiguration', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'isOpen', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getUnitOfWork', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getProxyFactory', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'initializeObject', array('obj' => $obj), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'getFilters', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'isFiltersStateClean', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'hasFilters', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return $this->valueHolder09c3b->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer28145 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder09c3b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder09c3b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder09c3b->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, '__get', ['name' => $name], $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        if (isset(self::$publicPropertiesce9f8[$name])) {
            return $this->valueHolder09c3b->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09c3b;
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
        $targetObject = $this->valueHolder09c3b;
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
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09c3b;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder09c3b;
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
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, '__isset', array('name' => $name), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09c3b;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder09c3b;
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
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, '__unset', array('name' => $name), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09c3b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder09c3b;
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
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, '__clone', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        $this->valueHolder09c3b = clone $this->valueHolder09c3b;
    }
    public function __sleep()
    {
        $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, '__sleep', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
        return array('valueHolder09c3b');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer28145 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer28145;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer28145 && ($this->initializer28145->__invoke($valueHolder09c3b, $this, 'initializeProxy', array(), $this->initializer28145) || 1) && $this->valueHolder09c3b = $valueHolder09c3b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder09c3b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder09c3b;
    }
}
