<?php

namespace Container0b7uu6S;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6bbe9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere61f6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties89a3f = [
        
    ];

    public function getConnection()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getConnection', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getMetadataFactory', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getExpressionBuilder', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'beginTransaction', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getCache', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getCache();
    }

    public function transactional($func)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'transactional', array('func' => $func), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'wrapInTransaction', array('func' => $func), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'commit', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->commit();
    }

    public function rollback()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'rollback', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getClassMetadata', array('className' => $className), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'createQuery', array('dql' => $dql), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'createNamedQuery', array('name' => $name), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'createQueryBuilder', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'flush', array('entity' => $entity), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'clear', array('entityName' => $entityName), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->clear($entityName);
    }

    public function close()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'close', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->close();
    }

    public function persist($entity)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'persist', array('entity' => $entity), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'remove', array('entity' => $entity), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'refresh', array('entity' => $entity), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'detach', array('entity' => $entity), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'merge', array('entity' => $entity), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getRepository', array('entityName' => $entityName), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'contains', array('entity' => $entity), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getEventManager', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getConfiguration', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'isOpen', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getUnitOfWork', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getProxyFactory', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'initializeObject', array('obj' => $obj), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'getFilters', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'isFiltersStateClean', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'hasFilters', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return $this->valueHolder6bbe9->hasFilters();
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

        $instance->initializere61f6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6bbe9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6bbe9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6bbe9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, '__get', ['name' => $name], $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        if (isset(self::$publicProperties89a3f[$name])) {
            return $this->valueHolder6bbe9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbe9;

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

        $targetObject = $this->valueHolder6bbe9;
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
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbe9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6bbe9;
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
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, '__isset', array('name' => $name), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbe9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6bbe9;
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
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, '__unset', array('name' => $name), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbe9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6bbe9;
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
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, '__clone', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        $this->valueHolder6bbe9 = clone $this->valueHolder6bbe9;
    }

    public function __sleep()
    {
        $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, '__sleep', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;

        return array('valueHolder6bbe9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere61f6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere61f6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere61f6 && ($this->initializere61f6->__invoke($valueHolder6bbe9, $this, 'initializeProxy', array(), $this->initializere61f6) || 1) && $this->valueHolder6bbe9 = $valueHolder6bbe9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bbe9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6bbe9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
