<?php

namespace ContainerMAAu2AH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf1e6c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13970 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3d61b = [
        
    ];

    public function getConnection()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getConnection', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getMetadataFactory', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getExpressionBuilder', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'beginTransaction', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getCache', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'transactional', array('func' => $func), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'commit', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->commit();
    }

    public function rollback()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'rollback', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getClassMetadata', array('className' => $className), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'createQuery', array('dql' => $dql), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'createNamedQuery', array('name' => $name), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'createQueryBuilder', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'flush', array('entity' => $entity), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'clear', array('entityName' => $entityName), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->clear($entityName);
    }

    public function close()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'close', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->close();
    }

    public function persist($entity)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'persist', array('entity' => $entity), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'remove', array('entity' => $entity), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'refresh', array('entity' => $entity), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'detach', array('entity' => $entity), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'merge', array('entity' => $entity), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'contains', array('entity' => $entity), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getEventManager', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getConfiguration', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'isOpen', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getUnitOfWork', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getProxyFactory', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'initializeObject', array('obj' => $obj), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'getFilters', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'isFiltersStateClean', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'hasFilters', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return $this->valueHolderf1e6c->hasFilters();
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

        $instance->initializer13970 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf1e6c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf1e6c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf1e6c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, '__get', ['name' => $name], $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        if (isset(self::$publicProperties3d61b[$name])) {
            return $this->valueHolderf1e6c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf1e6c;

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

        $targetObject = $this->valueHolderf1e6c;
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
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf1e6c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf1e6c;
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
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, '__isset', array('name' => $name), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf1e6c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf1e6c;
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
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, '__unset', array('name' => $name), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf1e6c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf1e6c;
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
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, '__clone', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        $this->valueHolderf1e6c = clone $this->valueHolderf1e6c;
    }

    public function __sleep()
    {
        $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, '__sleep', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;

        return array('valueHolderf1e6c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer13970 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer13970;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer13970 && ($this->initializer13970->__invoke($valueHolderf1e6c, $this, 'initializeProxy', array(), $this->initializer13970) || 1) && $this->valueHolderf1e6c = $valueHolderf1e6c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf1e6c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf1e6c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
