<?php

namespace ContainerYdY2ghp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc548b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8a9ab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdf807 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getConnection', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getMetadataFactory', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getExpressionBuilder', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'beginTransaction', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getCache', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'transactional', array('func' => $func), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'commit', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->commit();
    }

    public function rollback()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'rollback', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getClassMetadata', array('className' => $className), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'createQuery', array('dql' => $dql), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'createNamedQuery', array('name' => $name), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'createQueryBuilder', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'flush', array('entity' => $entity), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'clear', array('entityName' => $entityName), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->clear($entityName);
    }

    public function close()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'close', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->close();
    }

    public function persist($entity)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'persist', array('entity' => $entity), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'remove', array('entity' => $entity), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'refresh', array('entity' => $entity), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'detach', array('entity' => $entity), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'merge', array('entity' => $entity), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'contains', array('entity' => $entity), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getEventManager', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getConfiguration', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'isOpen', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getUnitOfWork', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getProxyFactory', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'initializeObject', array('obj' => $obj), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'getFilters', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'isFiltersStateClean', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'hasFilters', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return $this->valueHolderc548b->hasFilters();
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

        $instance->initializer8a9ab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc548b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc548b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc548b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, '__get', ['name' => $name], $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        if (isset(self::$publicPropertiesdf807[$name])) {
            return $this->valueHolderc548b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc548b;

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

        $targetObject = $this->valueHolderc548b;
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
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc548b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc548b;
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
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, '__isset', array('name' => $name), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc548b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc548b;
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
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, '__unset', array('name' => $name), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc548b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc548b;
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
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, '__clone', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        $this->valueHolderc548b = clone $this->valueHolderc548b;
    }

    public function __sleep()
    {
        $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, '__sleep', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;

        return array('valueHolderc548b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a9ab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a9ab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8a9ab && ($this->initializer8a9ab->__invoke($valueHolderc548b, $this, 'initializeProxy', array(), $this->initializer8a9ab) || 1) && $this->valueHolderc548b = $valueHolderc548b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc548b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc548b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
