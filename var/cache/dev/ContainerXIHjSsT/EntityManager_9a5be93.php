<?php

namespace ContainerXIHjSsT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder33d43 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer087e6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties615b2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getConnection', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getMetadataFactory', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getExpressionBuilder', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'beginTransaction', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getCache', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getCache();
    }

    public function transactional($func)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'transactional', array('func' => $func), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'wrapInTransaction', array('func' => $func), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'commit', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->commit();
    }

    public function rollback()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'rollback', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getClassMetadata', array('className' => $className), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'createQuery', array('dql' => $dql), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'createNamedQuery', array('name' => $name), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'createQueryBuilder', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'flush', array('entity' => $entity), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'clear', array('entityName' => $entityName), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->clear($entityName);
    }

    public function close()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'close', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->close();
    }

    public function persist($entity)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'persist', array('entity' => $entity), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'remove', array('entity' => $entity), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'refresh', array('entity' => $entity), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'detach', array('entity' => $entity), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'merge', array('entity' => $entity), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getRepository', array('entityName' => $entityName), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'contains', array('entity' => $entity), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getEventManager', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getConfiguration', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'isOpen', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getUnitOfWork', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getProxyFactory', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'initializeObject', array('obj' => $obj), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'getFilters', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'isFiltersStateClean', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'hasFilters', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return $this->valueHolder33d43->hasFilters();
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

        $instance->initializer087e6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder33d43) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder33d43 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder33d43->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, '__get', ['name' => $name], $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        if (isset(self::$publicProperties615b2[$name])) {
            return $this->valueHolder33d43->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d43;

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

        $targetObject = $this->valueHolder33d43;
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
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d43;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33d43;
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
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, '__isset', array('name' => $name), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d43;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder33d43;
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
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, '__unset', array('name' => $name), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33d43;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder33d43;
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
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, '__clone', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        $this->valueHolder33d43 = clone $this->valueHolder33d43;
    }

    public function __sleep()
    {
        $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, '__sleep', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;

        return array('valueHolder33d43');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer087e6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer087e6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer087e6 && ($this->initializer087e6->__invoke($valueHolder33d43, $this, 'initializeProxy', array(), $this->initializer087e6) || 1) && $this->valueHolder33d43 = $valueHolder33d43;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder33d43;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder33d43;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
