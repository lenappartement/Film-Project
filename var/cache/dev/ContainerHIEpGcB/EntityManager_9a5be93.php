<?php

namespace ContainerHIEpGcB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder34e59 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb13c6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc83d8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getConnection', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getMetadataFactory', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getExpressionBuilder', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'beginTransaction', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getCache', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'transactional', array('func' => $func), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'commit', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->commit();
    }

    public function rollback()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'rollback', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getClassMetadata', array('className' => $className), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'createQuery', array('dql' => $dql), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'createNamedQuery', array('name' => $name), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'createQueryBuilder', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'flush', array('entity' => $entity), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'clear', array('entityName' => $entityName), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->clear($entityName);
    }

    public function close()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'close', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->close();
    }

    public function persist($entity)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'persist', array('entity' => $entity), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'remove', array('entity' => $entity), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'refresh', array('entity' => $entity), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'detach', array('entity' => $entity), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'merge', array('entity' => $entity), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'contains', array('entity' => $entity), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getEventManager', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getConfiguration', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'isOpen', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getUnitOfWork', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getProxyFactory', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'initializeObject', array('obj' => $obj), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'getFilters', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'isFiltersStateClean', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'hasFilters', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return $this->valueHolder34e59->hasFilters();
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

        $instance->initializerb13c6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder34e59) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder34e59 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder34e59->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, '__get', ['name' => $name], $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        if (isset(self::$publicPropertiesc83d8[$name])) {
            return $this->valueHolder34e59->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34e59;

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

        $targetObject = $this->valueHolder34e59;
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
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34e59;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder34e59;
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
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, '__isset', array('name' => $name), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34e59;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder34e59;
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
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, '__unset', array('name' => $name), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder34e59;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder34e59;
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
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, '__clone', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        $this->valueHolder34e59 = clone $this->valueHolder34e59;
    }

    public function __sleep()
    {
        $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, '__sleep', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;

        return array('valueHolder34e59');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb13c6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb13c6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb13c6 && ($this->initializerb13c6->__invoke($valueHolder34e59, $this, 'initializeProxy', array(), $this->initializerb13c6) || 1) && $this->valueHolder34e59 = $valueHolder34e59;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder34e59;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder34e59;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
