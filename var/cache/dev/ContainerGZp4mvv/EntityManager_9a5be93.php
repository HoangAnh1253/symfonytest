<?php

namespace ContainerGZp4mvv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1b0eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0d00b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesee078 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getConnection', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getMetadataFactory', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getExpressionBuilder', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'beginTransaction', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getCache', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'transactional', array('func' => $func), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'commit', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->commit();
    }

    public function rollback()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'rollback', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'createQuery', array('dql' => $dql), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'createQueryBuilder', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'flush', array('entity' => $entity), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'clear', array('entityName' => $entityName), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'close', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->close();
    }

    public function persist($entity)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'persist', array('entity' => $entity), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'remove', array('entity' => $entity), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'refresh', array('entity' => $entity), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'detach', array('entity' => $entity), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'merge', array('entity' => $entity), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'contains', array('entity' => $entity), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getEventManager', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getConfiguration', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'isOpen', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getUnitOfWork', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getProxyFactory', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'getFilters', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'isFiltersStateClean', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'hasFilters', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return $this->valueHolder1b0eb->hasFilters();
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

        $instance->initializer0d00b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1b0eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1b0eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1b0eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, '__get', ['name' => $name], $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        if (isset(self::$publicPropertiesee078[$name])) {
            return $this->valueHolder1b0eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0eb;

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

        $targetObject = $this->valueHolder1b0eb;
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
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1b0eb;
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
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, '__isset', array('name' => $name), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1b0eb;
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
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, '__unset', array('name' => $name), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1b0eb;
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
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, '__clone', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        $this->valueHolder1b0eb = clone $this->valueHolder1b0eb;
    }

    public function __sleep()
    {
        $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, '__sleep', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;

        return array('valueHolder1b0eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0d00b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0d00b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0d00b && ($this->initializer0d00b->__invoke($valueHolder1b0eb, $this, 'initializeProxy', array(), $this->initializer0d00b) || 1) && $this->valueHolder1b0eb = $valueHolder1b0eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1b0eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1b0eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
