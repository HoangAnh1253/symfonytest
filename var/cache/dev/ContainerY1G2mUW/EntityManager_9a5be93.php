<?php

namespace ContainerY1G2mUW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder49305 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereaa27 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese6922 = [
        
    ];

    public function getConnection()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getConnection', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getMetadataFactory', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getExpressionBuilder', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'beginTransaction', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getCache', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getCache();
    }

    public function transactional($func)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'transactional', array('func' => $func), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'wrapInTransaction', array('func' => $func), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'commit', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->commit();
    }

    public function rollback()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'rollback', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getClassMetadata', array('className' => $className), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'createQuery', array('dql' => $dql), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'createNamedQuery', array('name' => $name), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'createQueryBuilder', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'flush', array('entity' => $entity), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'clear', array('entityName' => $entityName), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->clear($entityName);
    }

    public function close()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'close', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->close();
    }

    public function persist($entity)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'persist', array('entity' => $entity), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'remove', array('entity' => $entity), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'refresh', array('entity' => $entity), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'detach', array('entity' => $entity), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'merge', array('entity' => $entity), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getRepository', array('entityName' => $entityName), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'contains', array('entity' => $entity), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getEventManager', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getConfiguration', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'isOpen', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getUnitOfWork', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getProxyFactory', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'initializeObject', array('obj' => $obj), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'getFilters', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'isFiltersStateClean', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'hasFilters', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return $this->valueHolder49305->hasFilters();
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

        $instance->initializereaa27 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder49305) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder49305 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder49305->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, '__get', ['name' => $name], $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        if (isset(self::$publicPropertiese6922[$name])) {
            return $this->valueHolder49305->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49305;

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

        $targetObject = $this->valueHolder49305;
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
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49305;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder49305;
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
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, '__isset', array('name' => $name), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49305;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder49305;
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
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, '__unset', array('name' => $name), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49305;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder49305;
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
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, '__clone', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        $this->valueHolder49305 = clone $this->valueHolder49305;
    }

    public function __sleep()
    {
        $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, '__sleep', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;

        return array('valueHolder49305');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereaa27 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereaa27;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereaa27 && ($this->initializereaa27->__invoke($valueHolder49305, $this, 'initializeProxy', array(), $this->initializereaa27) || 1) && $this->valueHolder49305 = $valueHolder49305;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder49305;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder49305;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
