<?php

namespace ContainerZHB9xzT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder77cd3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerec507 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa7827 = [
        
    ];

    public function getConnection()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getConnection', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getMetadataFactory', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getExpressionBuilder', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'beginTransaction', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getCache', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getCache();
    }

    public function transactional($func)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'transactional', array('func' => $func), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->transactional($func);
    }

    public function commit()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'commit', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->commit();
    }

    public function rollback()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'rollback', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getClassMetadata', array('className' => $className), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'createQuery', array('dql' => $dql), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'createNamedQuery', array('name' => $name), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'createQueryBuilder', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'flush', array('entity' => $entity), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'clear', array('entityName' => $entityName), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->clear($entityName);
    }

    public function close()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'close', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->close();
    }

    public function persist($entity)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'persist', array('entity' => $entity), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'remove', array('entity' => $entity), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'refresh', array('entity' => $entity), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'detach', array('entity' => $entity), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'merge', array('entity' => $entity), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getRepository', array('entityName' => $entityName), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'contains', array('entity' => $entity), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getEventManager', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getConfiguration', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'isOpen', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getUnitOfWork', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getProxyFactory', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'initializeObject', array('obj' => $obj), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'getFilters', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'isFiltersStateClean', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'hasFilters', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return $this->valueHolder77cd3->hasFilters();
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

        $instance->initializerec507 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder77cd3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder77cd3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder77cd3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, '__get', ['name' => $name], $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        if (isset(self::$publicPropertiesa7827[$name])) {
            return $this->valueHolder77cd3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77cd3;

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

        $targetObject = $this->valueHolder77cd3;
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
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77cd3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder77cd3;
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
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, '__isset', array('name' => $name), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77cd3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder77cd3;
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
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, '__unset', array('name' => $name), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder77cd3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder77cd3;
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
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, '__clone', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        $this->valueHolder77cd3 = clone $this->valueHolder77cd3;
    }

    public function __sleep()
    {
        $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, '__sleep', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;

        return array('valueHolder77cd3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerec507 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerec507;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerec507 && ($this->initializerec507->__invoke($valueHolder77cd3, $this, 'initializeProxy', array(), $this->initializerec507) || 1) && $this->valueHolder77cd3 = $valueHolder77cd3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder77cd3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder77cd3;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
