<?php

namespace ContainerYkVdxC7;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder51219 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc2710 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8b9ac = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;

        if ($this->valueHolder51219 === $returnValue = $this->valueHolder51219->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerc2710 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder51219) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder51219 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, '__get', ['name' => $name], $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;

        if (isset(self::$publicProperties8b9ac[$name])) {
            return $this->valueHolder51219->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51219;

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

        $targetObject = $this->valueHolder51219;
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
        $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51219;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder51219;
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
        $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, '__isset', array('name' => $name), $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51219;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder51219;
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
        $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, '__unset', array('name' => $name), $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51219;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder51219;
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
        $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, '__clone', array(), $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;

        $this->valueHolder51219 = clone $this->valueHolder51219;
    }

    public function __sleep()
    {
        $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, '__sleep', array(), $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;

        return array('valueHolder51219');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc2710 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc2710;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc2710 && ($this->initializerc2710->__invoke($valueHolder51219, $this, 'initializeProxy', array(), $this->initializerc2710) || 1) && $this->valueHolder51219 = $valueHolder51219;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder51219;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder51219;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
