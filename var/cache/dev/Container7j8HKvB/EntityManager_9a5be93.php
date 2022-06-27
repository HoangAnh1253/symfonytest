<?php

namespace Container7j8HKvB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89fc1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82b49 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3ede5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getConnection', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getMetadataFactory', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getExpressionBuilder', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'beginTransaction', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getCache', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'transactional', array('func' => $func), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'commit', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->commit();
    }

    public function rollback()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'rollback', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getClassMetadata', array('className' => $className), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'createQuery', array('dql' => $dql), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'createNamedQuery', array('name' => $name), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'createQueryBuilder', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'flush', array('entity' => $entity), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'clear', array('entityName' => $entityName), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->clear($entityName);
    }

    public function close()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'close', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->close();
    }

    public function persist($entity)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'persist', array('entity' => $entity), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'remove', array('entity' => $entity), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'refresh', array('entity' => $entity), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'detach', array('entity' => $entity), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'merge', array('entity' => $entity), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'contains', array('entity' => $entity), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getEventManager', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getConfiguration', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'isOpen', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getUnitOfWork', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getProxyFactory', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'initializeObject', array('obj' => $obj), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'getFilters', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'isFiltersStateClean', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'hasFilters', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return $this->valueHolder89fc1->hasFilters();
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

        $instance->initializer82b49 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder89fc1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89fc1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89fc1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, '__get', ['name' => $name], $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        if (isset(self::$publicProperties3ede5[$name])) {
            return $this->valueHolder89fc1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fc1;

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

        $targetObject = $this->valueHolder89fc1;
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
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fc1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89fc1;
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
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, '__isset', array('name' => $name), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fc1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89fc1;
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
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, '__unset', array('name' => $name), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fc1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89fc1;
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
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, '__clone', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        $this->valueHolder89fc1 = clone $this->valueHolder89fc1;
    }

    public function __sleep()
    {
        $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, '__sleep', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;

        return array('valueHolder89fc1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82b49 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82b49;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82b49 && ($this->initializer82b49->__invoke($valueHolder89fc1, $this, 'initializeProxy', array(), $this->initializer82b49) || 1) && $this->valueHolder89fc1 = $valueHolder89fc1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89fc1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89fc1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
