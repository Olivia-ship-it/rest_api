<?php

namespace ContainerNKhiWbp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16da5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfd0dd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2bd42 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getConnection', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getMetadataFactory', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getExpressionBuilder', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'beginTransaction', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getCache', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'transactional', array('func' => $func), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->transactional($func);
    }

    public function commit()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'commit', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->commit();
    }

    public function rollback()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'rollback', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getClassMetadata', array('className' => $className), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'createQuery', array('dql' => $dql), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'createNamedQuery', array('name' => $name), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'createQueryBuilder', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'flush', array('entity' => $entity), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'clear', array('entityName' => $entityName), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->clear($entityName);
    }

    public function close()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'close', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->close();
    }

    public function persist($entity)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'persist', array('entity' => $entity), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'remove', array('entity' => $entity), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'refresh', array('entity' => $entity), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'detach', array('entity' => $entity), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'merge', array('entity' => $entity), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'contains', array('entity' => $entity), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getEventManager', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getConfiguration', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'isOpen', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getUnitOfWork', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getProxyFactory', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'initializeObject', array('obj' => $obj), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'getFilters', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'isFiltersStateClean', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'hasFilters', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return $this->valueHolder16da5->hasFilters();
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

        $instance->initializerfd0dd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16da5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16da5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16da5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, '__get', ['name' => $name], $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        if (isset(self::$publicProperties2bd42[$name])) {
            return $this->valueHolder16da5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16da5;

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

        $targetObject = $this->valueHolder16da5;
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
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16da5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16da5;
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
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, '__isset', array('name' => $name), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16da5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16da5;
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
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, '__unset', array('name' => $name), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16da5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16da5;
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
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, '__clone', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        $this->valueHolder16da5 = clone $this->valueHolder16da5;
    }

    public function __sleep()
    {
        $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, '__sleep', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;

        return array('valueHolder16da5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfd0dd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfd0dd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfd0dd && ($this->initializerfd0dd->__invoke($valueHolder16da5, $this, 'initializeProxy', array(), $this->initializerfd0dd) || 1) && $this->valueHolder16da5 = $valueHolder16da5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16da5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16da5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
