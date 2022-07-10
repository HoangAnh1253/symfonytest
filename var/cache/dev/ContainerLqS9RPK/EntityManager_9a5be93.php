<?php

namespace ContainerLqS9RPK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder30e85 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer37c90 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbd0ea = [
        
    ];

    public function getConnection()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getConnection', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getMetadataFactory', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getExpressionBuilder', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'beginTransaction', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getCache', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getCache();
    }

    public function transactional($func)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'transactional', array('func' => $func), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'wrapInTransaction', array('func' => $func), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'commit', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->commit();
    }

    public function rollback()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'rollback', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getClassMetadata', array('className' => $className), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'createQuery', array('dql' => $dql), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'createNamedQuery', array('name' => $name), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'createQueryBuilder', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'flush', array('entity' => $entity), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'clear', array('entityName' => $entityName), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->clear($entityName);
    }

    public function close()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'close', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->close();
    }

    public function persist($entity)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'persist', array('entity' => $entity), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'remove', array('entity' => $entity), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'refresh', array('entity' => $entity), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'detach', array('entity' => $entity), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'merge', array('entity' => $entity), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getRepository', array('entityName' => $entityName), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'contains', array('entity' => $entity), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getEventManager', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getConfiguration', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'isOpen', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getUnitOfWork', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getProxyFactory', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'initializeObject', array('obj' => $obj), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'getFilters', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'isFiltersStateClean', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'hasFilters', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return $this->valueHolder30e85->hasFilters();
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

        $instance->initializer37c90 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder30e85) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder30e85 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder30e85->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, '__get', ['name' => $name], $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        if (isset(self::$publicPropertiesbd0ea[$name])) {
            return $this->valueHolder30e85->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e85;

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

        $targetObject = $this->valueHolder30e85;
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
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e85;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder30e85;
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
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, '__isset', array('name' => $name), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e85;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder30e85;
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
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, '__unset', array('name' => $name), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e85;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder30e85;
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
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, '__clone', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        $this->valueHolder30e85 = clone $this->valueHolder30e85;
    }

    public function __sleep()
    {
        $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, '__sleep', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;

        return array('valueHolder30e85');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer37c90 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer37c90;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer37c90 && ($this->initializer37c90->__invoke($valueHolder30e85, $this, 'initializeProxy', array(), $this->initializer37c90) || 1) && $this->valueHolder30e85 = $valueHolder30e85;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30e85;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30e85;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
