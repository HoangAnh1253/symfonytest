<?php

namespace Container2yuiyUZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef599 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer954df = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb7152 = [
        
    ];

    public function getConnection()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getConnection', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getMetadataFactory', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getExpressionBuilder', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'beginTransaction', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getCache', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getCache();
    }

    public function transactional($func)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'transactional', array('func' => $func), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'wrapInTransaction', array('func' => $func), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'commit', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->commit();
    }

    public function rollback()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'rollback', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getClassMetadata', array('className' => $className), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'createQuery', array('dql' => $dql), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'createNamedQuery', array('name' => $name), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'createQueryBuilder', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'flush', array('entity' => $entity), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'clear', array('entityName' => $entityName), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->clear($entityName);
    }

    public function close()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'close', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->close();
    }

    public function persist($entity)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'persist', array('entity' => $entity), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'remove', array('entity' => $entity), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'refresh', array('entity' => $entity), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'detach', array('entity' => $entity), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'merge', array('entity' => $entity), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getRepository', array('entityName' => $entityName), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'contains', array('entity' => $entity), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getEventManager', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getConfiguration', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'isOpen', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getUnitOfWork', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getProxyFactory', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'initializeObject', array('obj' => $obj), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'getFilters', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'isFiltersStateClean', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'hasFilters', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return $this->valueHolderef599->hasFilters();
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

        $instance->initializer954df = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef599) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef599 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef599->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, '__get', ['name' => $name], $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        if (isset(self::$publicPropertiesb7152[$name])) {
            return $this->valueHolderef599->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef599;

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

        $targetObject = $this->valueHolderef599;
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
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef599;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef599;
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
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, '__isset', array('name' => $name), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef599;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef599;
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
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, '__unset', array('name' => $name), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef599;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef599;
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
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, '__clone', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        $this->valueHolderef599 = clone $this->valueHolderef599;
    }

    public function __sleep()
    {
        $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, '__sleep', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;

        return array('valueHolderef599');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer954df = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer954df;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer954df && ($this->initializer954df->__invoke($valueHolderef599, $this, 'initializeProxy', array(), $this->initializer954df) || 1) && $this->valueHolderef599 = $valueHolderef599;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef599;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef599;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
