<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder82c01 = null;
    private $initializerbb184 = null;
    private static $publicPropertiesefe39 = [
        
    ];
    public function getConnection()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getConnection', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getMetadataFactory', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getExpressionBuilder', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'beginTransaction', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getCache', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getCache();
    }
    public function transactional($func)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'transactional', array('func' => $func), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'commit', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->commit();
    }
    public function rollback()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'rollback', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getClassMetadata', array('className' => $className), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'createQuery', array('dql' => $dql), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'createNamedQuery', array('name' => $name), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'createQueryBuilder', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'flush', array('entity' => $entity), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'clear', array('entityName' => $entityName), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->clear($entityName);
    }
    public function close()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'close', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->close();
    }
    public function persist($entity)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'persist', array('entity' => $entity), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'remove', array('entity' => $entity), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'refresh', array('entity' => $entity), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'detach', array('entity' => $entity), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'merge', array('entity' => $entity), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'contains', array('entity' => $entity), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getEventManager', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getConfiguration', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'isOpen', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getUnitOfWork', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getProxyFactory', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'initializeObject', array('obj' => $obj), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'getFilters', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'isFiltersStateClean', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'hasFilters', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return $this->valueHolder82c01->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerbb184 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder82c01) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder82c01 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder82c01->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, '__get', ['name' => $name], $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        if (isset(self::$publicPropertiesefe39[$name])) {
            return $this->valueHolder82c01->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82c01;
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
        $targetObject = $this->valueHolder82c01;
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
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82c01;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder82c01;
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
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, '__isset', array('name' => $name), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82c01;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder82c01;
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
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, '__unset', array('name' => $name), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder82c01;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder82c01;
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
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, '__clone', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        $this->valueHolder82c01 = clone $this->valueHolder82c01;
    }
    public function __sleep()
    {
        $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, '__sleep', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
        return array('valueHolder82c01');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbb184 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbb184;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbb184 && ($this->initializerbb184->__invoke($valueHolder82c01, $this, 'initializeProxy', array(), $this->initializerbb184) || 1) && $this->valueHolder82c01 = $valueHolder82c01;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder82c01;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder82c01;
    }
}
