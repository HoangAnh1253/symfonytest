<?php

namespace ContainerTgNRuMC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder38350 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4aeff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties19b95 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getConnection', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getMetadataFactory', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getExpressionBuilder', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'beginTransaction', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getCache', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'transactional', array('func' => $func), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'commit', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->commit();
    }

    public function rollback()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'rollback', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getClassMetadata', array('className' => $className), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'createQuery', array('dql' => $dql), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'createNamedQuery', array('name' => $name), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'createQueryBuilder', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'flush', array('entity' => $entity), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'clear', array('entityName' => $entityName), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->clear($entityName);
    }

    public function close()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'close', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->close();
    }

    public function persist($entity)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'persist', array('entity' => $entity), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'remove', array('entity' => $entity), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'refresh', array('entity' => $entity), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'detach', array('entity' => $entity), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'merge', array('entity' => $entity), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'contains', array('entity' => $entity), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getEventManager', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getConfiguration', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'isOpen', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getUnitOfWork', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getProxyFactory', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'initializeObject', array('obj' => $obj), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'getFilters', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'isFiltersStateClean', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'hasFilters', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return $this->valueHolder38350->hasFilters();
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

        $instance->initializer4aeff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder38350) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder38350 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder38350->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, '__get', ['name' => $name], $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        if (isset(self::$publicProperties19b95[$name])) {
            return $this->valueHolder38350->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38350;

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

        $targetObject = $this->valueHolder38350;
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
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38350;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38350;
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
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, '__isset', array('name' => $name), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38350;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder38350;
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
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, '__unset', array('name' => $name), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38350;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder38350;
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
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, '__clone', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        $this->valueHolder38350 = clone $this->valueHolder38350;
    }

    public function __sleep()
    {
        $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, '__sleep', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;

        return array('valueHolder38350');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4aeff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4aeff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4aeff && ($this->initializer4aeff->__invoke($valueHolder38350, $this, 'initializeProxy', array(), $this->initializer4aeff) || 1) && $this->valueHolder38350 = $valueHolder38350;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder38350;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder38350;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
