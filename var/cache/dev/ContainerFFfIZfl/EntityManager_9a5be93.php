<?php

namespace ContainerFFfIZfl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder60af6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer972a1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd6f8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getConnection', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getMetadataFactory', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getExpressionBuilder', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'beginTransaction', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getCache', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'transactional', array('func' => $func), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'commit', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->commit();
    }

    public function rollback()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'rollback', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getClassMetadata', array('className' => $className), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'createQuery', array('dql' => $dql), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'createNamedQuery', array('name' => $name), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'createQueryBuilder', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'flush', array('entity' => $entity), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'clear', array('entityName' => $entityName), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->clear($entityName);
    }

    public function close()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'close', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->close();
    }

    public function persist($entity)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'persist', array('entity' => $entity), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'remove', array('entity' => $entity), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'refresh', array('entity' => $entity), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'detach', array('entity' => $entity), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'merge', array('entity' => $entity), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'contains', array('entity' => $entity), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getEventManager', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getConfiguration', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'isOpen', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getUnitOfWork', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getProxyFactory', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'initializeObject', array('obj' => $obj), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'getFilters', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'isFiltersStateClean', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'hasFilters', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return $this->valueHolder60af6->hasFilters();
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

        $instance->initializer972a1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder60af6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder60af6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder60af6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, '__get', ['name' => $name], $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        if (isset(self::$publicPropertiesdd6f8[$name])) {
            return $this->valueHolder60af6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60af6;

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

        $targetObject = $this->valueHolder60af6;
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
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60af6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder60af6;
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
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, '__isset', array('name' => $name), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60af6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder60af6;
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
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, '__unset', array('name' => $name), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60af6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder60af6;
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
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, '__clone', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        $this->valueHolder60af6 = clone $this->valueHolder60af6;
    }

    public function __sleep()
    {
        $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, '__sleep', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;

        return array('valueHolder60af6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer972a1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer972a1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer972a1 && ($this->initializer972a1->__invoke($valueHolder60af6, $this, 'initializeProxy', array(), $this->initializer972a1) || 1) && $this->valueHolder60af6 = $valueHolder60af6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder60af6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder60af6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
