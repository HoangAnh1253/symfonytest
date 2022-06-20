<?php

namespace ContainerX4blVhS;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere33e3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbc05e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9b35a = [
        
    ];

    public function getConnection()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getConnection', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getMetadataFactory', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getExpressionBuilder', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'beginTransaction', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getCache', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'transactional', array('func' => $func), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'commit', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->commit();
    }

    public function rollback()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'rollback', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'createQuery', array('dql' => $dql), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'createQueryBuilder', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'flush', array('entity' => $entity), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'clear', array('entityName' => $entityName), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->clear($entityName);
    }

    public function close()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'close', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->close();
    }

    public function persist($entity)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'persist', array('entity' => $entity), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'remove', array('entity' => $entity), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'refresh', array('entity' => $entity), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'detach', array('entity' => $entity), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'merge', array('entity' => $entity), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'contains', array('entity' => $entity), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getEventManager', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getConfiguration', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'isOpen', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getUnitOfWork', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getProxyFactory', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'getFilters', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'isFiltersStateClean', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'hasFilters', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return $this->valueHoldere33e3->hasFilters();
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

        $instance->initializerbc05e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere33e3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere33e3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere33e3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, '__get', ['name' => $name], $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        if (isset(self::$publicProperties9b35a[$name])) {
            return $this->valueHoldere33e3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere33e3;

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

        $targetObject = $this->valueHoldere33e3;
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
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere33e3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere33e3;
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
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, '__isset', array('name' => $name), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere33e3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere33e3;
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
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, '__unset', array('name' => $name), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere33e3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere33e3;
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
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, '__clone', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        $this->valueHoldere33e3 = clone $this->valueHoldere33e3;
    }

    public function __sleep()
    {
        $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, '__sleep', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;

        return array('valueHoldere33e3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc05e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc05e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbc05e && ($this->initializerbc05e->__invoke($valueHoldere33e3, $this, 'initializeProxy', array(), $this->initializerbc05e) || 1) && $this->valueHoldere33e3 = $valueHoldere33e3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere33e3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere33e3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
