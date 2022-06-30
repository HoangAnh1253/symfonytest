<?php

namespace ContainerNF9gM0v;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86d4f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer95728 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties05e1e = [
        
    ];

    public function getConnection()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getConnection', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getMetadataFactory', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getExpressionBuilder', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'beginTransaction', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getCache', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'transactional', array('func' => $func), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'commit', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->commit();
    }

    public function rollback()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'rollback', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getClassMetadata', array('className' => $className), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'createQuery', array('dql' => $dql), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'createNamedQuery', array('name' => $name), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'createQueryBuilder', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'flush', array('entity' => $entity), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'clear', array('entityName' => $entityName), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->clear($entityName);
    }

    public function close()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'close', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->close();
    }

    public function persist($entity)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'persist', array('entity' => $entity), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'remove', array('entity' => $entity), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'refresh', array('entity' => $entity), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'detach', array('entity' => $entity), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'merge', array('entity' => $entity), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'contains', array('entity' => $entity), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getEventManager', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getConfiguration', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'isOpen', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getUnitOfWork', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getProxyFactory', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'initializeObject', array('obj' => $obj), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'getFilters', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'isFiltersStateClean', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'hasFilters', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return $this->valueHolder86d4f->hasFilters();
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

        $instance->initializer95728 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder86d4f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86d4f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder86d4f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, '__get', ['name' => $name], $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        if (isset(self::$publicProperties05e1e[$name])) {
            return $this->valueHolder86d4f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d4f;

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

        $targetObject = $this->valueHolder86d4f;
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
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d4f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86d4f;
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
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, '__isset', array('name' => $name), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d4f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86d4f;
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
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, '__unset', array('name' => $name), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86d4f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86d4f;
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
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, '__clone', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        $this->valueHolder86d4f = clone $this->valueHolder86d4f;
    }

    public function __sleep()
    {
        $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, '__sleep', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;

        return array('valueHolder86d4f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer95728 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer95728;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer95728 && ($this->initializer95728->__invoke($valueHolder86d4f, $this, 'initializeProxy', array(), $this->initializer95728) || 1) && $this->valueHolder86d4f = $valueHolder86d4f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86d4f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86d4f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
