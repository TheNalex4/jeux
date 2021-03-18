<?php

namespace ContainerRRxRPck;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera5aae = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraeec4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese8e5e = [
        
    ];

    public function getConnection()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getConnection', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getMetadataFactory', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getExpressionBuilder', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'beginTransaction', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getCache', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'transactional', array('func' => $func), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->transactional($func);
    }

    public function commit()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'commit', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->commit();
    }

    public function rollback()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'rollback', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getClassMetadata', array('className' => $className), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'createQuery', array('dql' => $dql), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'createNamedQuery', array('name' => $name), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'createQueryBuilder', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'flush', array('entity' => $entity), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'clear', array('entityName' => $entityName), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->clear($entityName);
    }

    public function close()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'close', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->close();
    }

    public function persist($entity)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'persist', array('entity' => $entity), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'remove', array('entity' => $entity), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'refresh', array('entity' => $entity), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'detach', array('entity' => $entity), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'merge', array('entity' => $entity), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'contains', array('entity' => $entity), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getEventManager', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getConfiguration', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'isOpen', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getUnitOfWork', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getProxyFactory', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'initializeObject', array('obj' => $obj), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'getFilters', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'isFiltersStateClean', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'hasFilters', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return $this->valueHoldera5aae->hasFilters();
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

        $instance->initializeraeec4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera5aae) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera5aae = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera5aae->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, '__get', ['name' => $name], $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        if (isset(self::$publicPropertiese8e5e[$name])) {
            return $this->valueHoldera5aae->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5aae;

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

        $targetObject = $this->valueHoldera5aae;
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
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5aae;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera5aae;
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
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, '__isset', array('name' => $name), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5aae;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera5aae;
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
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, '__unset', array('name' => $name), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera5aae;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera5aae;
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
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, '__clone', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        $this->valueHoldera5aae = clone $this->valueHoldera5aae;
    }

    public function __sleep()
    {
        $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, '__sleep', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;

        return array('valueHoldera5aae');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraeec4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraeec4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraeec4 && ($this->initializeraeec4->__invoke($valueHoldera5aae, $this, 'initializeProxy', array(), $this->initializeraeec4) || 1) && $this->valueHoldera5aae = $valueHoldera5aae;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera5aae;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera5aae;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
