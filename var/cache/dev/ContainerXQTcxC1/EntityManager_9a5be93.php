<?php

namespace ContainerXQTcxC1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder93a4c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer878eb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb326b = [
        
    ];

    public function getConnection()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getConnection', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getMetadataFactory', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getExpressionBuilder', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'beginTransaction', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getCache', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'transactional', array('func' => $func), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'commit', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->commit();
    }

    public function rollback()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'rollback', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getClassMetadata', array('className' => $className), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'createQuery', array('dql' => $dql), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'createNamedQuery', array('name' => $name), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'createQueryBuilder', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'flush', array('entity' => $entity), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'clear', array('entityName' => $entityName), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->clear($entityName);
    }

    public function close()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'close', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->close();
    }

    public function persist($entity)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'persist', array('entity' => $entity), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'remove', array('entity' => $entity), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'refresh', array('entity' => $entity), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'detach', array('entity' => $entity), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'merge', array('entity' => $entity), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'contains', array('entity' => $entity), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getEventManager', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getConfiguration', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'isOpen', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getUnitOfWork', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getProxyFactory', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'initializeObject', array('obj' => $obj), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'getFilters', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'isFiltersStateClean', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'hasFilters', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return $this->valueHolder93a4c->hasFilters();
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

        $instance->initializer878eb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder93a4c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder93a4c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder93a4c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, '__get', ['name' => $name], $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        if (isset(self::$publicPropertiesb326b[$name])) {
            return $this->valueHolder93a4c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a4c;

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

        $targetObject = $this->valueHolder93a4c;
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
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a4c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder93a4c;
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
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, '__isset', array('name' => $name), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a4c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder93a4c;
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
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, '__unset', array('name' => $name), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93a4c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder93a4c;
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
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, '__clone', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        $this->valueHolder93a4c = clone $this->valueHolder93a4c;
    }

    public function __sleep()
    {
        $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, '__sleep', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;

        return array('valueHolder93a4c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer878eb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer878eb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer878eb && ($this->initializer878eb->__invoke($valueHolder93a4c, $this, 'initializeProxy', array(), $this->initializer878eb) || 1) && $this->valueHolder93a4c = $valueHolder93a4c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder93a4c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder93a4c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
