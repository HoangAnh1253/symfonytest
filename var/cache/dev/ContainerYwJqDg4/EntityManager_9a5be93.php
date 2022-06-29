<?php

namespace ContainerYwJqDg4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd62dd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere968a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdcb12 = [
        
    ];

    public function getConnection()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getConnection', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getMetadataFactory', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getExpressionBuilder', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'beginTransaction', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getCache', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getCache();
    }

    public function transactional($func)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'transactional', array('func' => $func), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'wrapInTransaction', array('func' => $func), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'commit', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->commit();
    }

    public function rollback()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'rollback', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getClassMetadata', array('className' => $className), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'createQuery', array('dql' => $dql), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'createNamedQuery', array('name' => $name), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'createQueryBuilder', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'flush', array('entity' => $entity), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'clear', array('entityName' => $entityName), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->clear($entityName);
    }

    public function close()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'close', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->close();
    }

    public function persist($entity)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'persist', array('entity' => $entity), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'remove', array('entity' => $entity), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'refresh', array('entity' => $entity), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'detach', array('entity' => $entity), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'merge', array('entity' => $entity), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getRepository', array('entityName' => $entityName), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'contains', array('entity' => $entity), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getEventManager', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getConfiguration', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'isOpen', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getUnitOfWork', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getProxyFactory', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'initializeObject', array('obj' => $obj), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'getFilters', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'isFiltersStateClean', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'hasFilters', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return $this->valueHolderd62dd->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere968a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd62dd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd62dd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd62dd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, '__get', ['name' => $name], $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        if (isset(self::$publicPropertiesdcb12[$name])) {
            return $this->valueHolderd62dd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd62dd;

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

        $targetObject = $this->valueHolderd62dd;
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
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd62dd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd62dd;
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
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, '__isset', array('name' => $name), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd62dd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd62dd;
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
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, '__unset', array('name' => $name), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd62dd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd62dd;
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
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, '__clone', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        $this->valueHolderd62dd = clone $this->valueHolderd62dd;
    }

    public function __sleep()
    {
        $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, '__sleep', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;

        return array('valueHolderd62dd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere968a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere968a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere968a && ($this->initializere968a->__invoke($valueHolderd62dd, $this, 'initializeProxy', array(), $this->initializere968a) || 1) && $this->valueHolderd62dd = $valueHolderd62dd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd62dd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd62dd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
