<?php

namespace ContainerIrttyU1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7c7da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer79c1e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesddfec = [
        
    ];

    public function getConnection()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getConnection', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getMetadataFactory', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getExpressionBuilder', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'beginTransaction', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getCache', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'transactional', array('func' => $func), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'wrapInTransaction', array('func' => $func), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'commit', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->commit();
    }

    public function rollback()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'rollback', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getClassMetadata', array('className' => $className), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'createQuery', array('dql' => $dql), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'createNamedQuery', array('name' => $name), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'createQueryBuilder', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'flush', array('entity' => $entity), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'clear', array('entityName' => $entityName), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->clear($entityName);
    }

    public function close()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'close', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->close();
    }

    public function persist($entity)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'persist', array('entity' => $entity), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'remove', array('entity' => $entity), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'refresh', array('entity' => $entity), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'detach', array('entity' => $entity), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'merge', array('entity' => $entity), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'contains', array('entity' => $entity), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getEventManager', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getConfiguration', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'isOpen', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getUnitOfWork', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getProxyFactory', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'initializeObject', array('obj' => $obj), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'getFilters', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'isFiltersStateClean', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'hasFilters', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return $this->valueHolder7c7da->hasFilters();
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

        $instance->initializer79c1e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7c7da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7c7da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7c7da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, '__get', ['name' => $name], $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        if (isset(self::$publicPropertiesddfec[$name])) {
            return $this->valueHolder7c7da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c7da;

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

        $targetObject = $this->valueHolder7c7da;
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
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c7da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7c7da;
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
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, '__isset', array('name' => $name), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c7da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7c7da;
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
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, '__unset', array('name' => $name), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c7da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7c7da;
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
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, '__clone', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        $this->valueHolder7c7da = clone $this->valueHolder7c7da;
    }

    public function __sleep()
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, '__sleep', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        return array('valueHolder7c7da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer79c1e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer79c1e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'initializeProxy', array(), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7c7da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7c7da;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
