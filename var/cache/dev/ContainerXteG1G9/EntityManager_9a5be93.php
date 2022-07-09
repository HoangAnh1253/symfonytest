<?php

namespace ContainerXteG1G9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder47651 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeradad4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf538f = [
        
    ];

    public function getConnection()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getConnection', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getMetadataFactory', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getExpressionBuilder', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'beginTransaction', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getCache', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getCache();
    }

    public function transactional($func)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'transactional', array('func' => $func), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'wrapInTransaction', array('func' => $func), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'commit', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->commit();
    }

    public function rollback()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'rollback', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getClassMetadata', array('className' => $className), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'createQuery', array('dql' => $dql), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'createNamedQuery', array('name' => $name), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'createQueryBuilder', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'flush', array('entity' => $entity), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'clear', array('entityName' => $entityName), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->clear($entityName);
    }

    public function close()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'close', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->close();
    }

    public function persist($entity)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'persist', array('entity' => $entity), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'remove', array('entity' => $entity), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'refresh', array('entity' => $entity), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'detach', array('entity' => $entity), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'merge', array('entity' => $entity), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getRepository', array('entityName' => $entityName), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'contains', array('entity' => $entity), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getEventManager', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getConfiguration', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'isOpen', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getUnitOfWork', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getProxyFactory', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'initializeObject', array('obj' => $obj), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'getFilters', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'isFiltersStateClean', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'hasFilters', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return $this->valueHolder47651->hasFilters();
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

        $instance->initializeradad4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder47651) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47651 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder47651->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, '__get', ['name' => $name], $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        if (isset(self::$publicPropertiesf538f[$name])) {
            return $this->valueHolder47651->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47651;

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

        $targetObject = $this->valueHolder47651;
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
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47651;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder47651;
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
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, '__isset', array('name' => $name), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47651;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder47651;
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
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, '__unset', array('name' => $name), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47651;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder47651;
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
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, '__clone', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        $this->valueHolder47651 = clone $this->valueHolder47651;
    }

    public function __sleep()
    {
        $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, '__sleep', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;

        return array('valueHolder47651');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeradad4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeradad4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeradad4 && ($this->initializeradad4->__invoke($valueHolder47651, $this, 'initializeProxy', array(), $this->initializeradad4) || 1) && $this->valueHolder47651 = $valueHolder47651;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47651;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47651;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
