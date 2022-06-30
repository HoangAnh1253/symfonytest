<?php

namespace ContainerIAyvuhl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder339da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8ee8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbb9d8 = [
        
    ];

    public function getConnection()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getConnection', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getMetadataFactory', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getExpressionBuilder', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'beginTransaction', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getCache', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'transactional', array('func' => $func), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'commit', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->commit();
    }

    public function rollback()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'rollback', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getClassMetadata', array('className' => $className), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'createQuery', array('dql' => $dql), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'createNamedQuery', array('name' => $name), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'createQueryBuilder', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'flush', array('entity' => $entity), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'clear', array('entityName' => $entityName), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->clear($entityName);
    }

    public function close()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'close', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->close();
    }

    public function persist($entity)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'persist', array('entity' => $entity), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'remove', array('entity' => $entity), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'refresh', array('entity' => $entity), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'detach', array('entity' => $entity), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'merge', array('entity' => $entity), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'contains', array('entity' => $entity), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getEventManager', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getConfiguration', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'isOpen', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getUnitOfWork', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getProxyFactory', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'initializeObject', array('obj' => $obj), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'getFilters', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'isFiltersStateClean', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'hasFilters', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return $this->valueHolder339da->hasFilters();
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

        $instance->initializera8ee8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder339da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder339da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder339da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, '__get', ['name' => $name], $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        if (isset(self::$publicPropertiesbb9d8[$name])) {
            return $this->valueHolder339da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder339da;

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

        $targetObject = $this->valueHolder339da;
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
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder339da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder339da;
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
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, '__isset', array('name' => $name), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder339da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder339da;
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
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, '__unset', array('name' => $name), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder339da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder339da;
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
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, '__clone', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        $this->valueHolder339da = clone $this->valueHolder339da;
    }

    public function __sleep()
    {
        $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, '__sleep', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;

        return array('valueHolder339da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8ee8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8ee8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8ee8 && ($this->initializera8ee8->__invoke($valueHolder339da, $this, 'initializeProxy', array(), $this->initializera8ee8) || 1) && $this->valueHolder339da = $valueHolder339da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder339da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder339da;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
