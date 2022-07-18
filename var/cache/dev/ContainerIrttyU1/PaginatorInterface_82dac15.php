<?php

namespace ContainerIrttyU1;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        if ($this->valueHolder7c7da === $returnValue = $this->valueHolder7c7da->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer79c1e = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder7c7da) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder7c7da = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer79c1e && ($this->initializer79c1e->__invoke($valueHolder7c7da, $this, '__get', ['name' => $name], $this->initializer79c1e) || 1) && $this->valueHolder7c7da = $valueHolder7c7da;

        if (isset(self::$publicPropertiesddfec[$name])) {
            return $this->valueHolder7c7da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
