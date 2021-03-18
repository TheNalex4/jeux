<?php

namespace ContainerNUxAmB2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf855c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer736a6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese20ca = [
        
    ];

    public function getConnection()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getConnection', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getMetadataFactory', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getExpressionBuilder', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'beginTransaction', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getCache', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'transactional', array('func' => $func), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->transactional($func);
    }

    public function commit()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'commit', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->commit();
    }

    public function rollback()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'rollback', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getClassMetadata', array('className' => $className), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'createQuery', array('dql' => $dql), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'createNamedQuery', array('name' => $name), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'createQueryBuilder', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'flush', array('entity' => $entity), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'clear', array('entityName' => $entityName), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->clear($entityName);
    }

    public function close()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'close', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->close();
    }

    public function persist($entity)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'persist', array('entity' => $entity), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'remove', array('entity' => $entity), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'refresh', array('entity' => $entity), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'detach', array('entity' => $entity), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'merge', array('entity' => $entity), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'contains', array('entity' => $entity), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getEventManager', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getConfiguration', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'isOpen', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getUnitOfWork', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getProxyFactory', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'initializeObject', array('obj' => $obj), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'getFilters', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'isFiltersStateClean', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'hasFilters', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return $this->valueHolderf855c->hasFilters();
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

        $instance->initializer736a6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf855c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf855c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf855c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, '__get', ['name' => $name], $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        if (isset(self::$publicPropertiese20ca[$name])) {
            return $this->valueHolderf855c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf855c;

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

        $targetObject = $this->valueHolderf855c;
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
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf855c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf855c;
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
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, '__isset', array('name' => $name), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf855c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf855c;
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
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, '__unset', array('name' => $name), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf855c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf855c;
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
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, '__clone', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        $this->valueHolderf855c = clone $this->valueHolderf855c;
    }

    public function __sleep()
    {
        $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, '__sleep', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;

        return array('valueHolderf855c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer736a6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer736a6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer736a6 && ($this->initializer736a6->__invoke($valueHolderf855c, $this, 'initializeProxy', array(), $this->initializer736a6) || 1) && $this->valueHolderf855c = $valueHolderf855c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf855c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf855c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
