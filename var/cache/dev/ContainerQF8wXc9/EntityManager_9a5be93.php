<?php

namespace ContainerQF8wXc9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd5cad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer101d3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties55361 = [
        
    ];

    public function getConnection()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getConnection', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getMetadataFactory', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getExpressionBuilder', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'beginTransaction', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getCache', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getCache();
    }

    public function transactional($func)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'transactional', array('func' => $func), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->transactional($func);
    }

    public function commit()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'commit', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->commit();
    }

    public function rollback()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'rollback', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getClassMetadata', array('className' => $className), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'createQuery', array('dql' => $dql), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'createNamedQuery', array('name' => $name), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'createQueryBuilder', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'flush', array('entity' => $entity), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'clear', array('entityName' => $entityName), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->clear($entityName);
    }

    public function close()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'close', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->close();
    }

    public function persist($entity)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'persist', array('entity' => $entity), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'remove', array('entity' => $entity), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'refresh', array('entity' => $entity), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'detach', array('entity' => $entity), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'merge', array('entity' => $entity), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getRepository', array('entityName' => $entityName), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'contains', array('entity' => $entity), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getEventManager', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getConfiguration', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'isOpen', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getUnitOfWork', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getProxyFactory', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'initializeObject', array('obj' => $obj), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'getFilters', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'isFiltersStateClean', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'hasFilters', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return $this->valueHolderd5cad->hasFilters();
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

        $instance->initializer101d3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd5cad) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd5cad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd5cad->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, '__get', ['name' => $name], $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        if (isset(self::$publicProperties55361[$name])) {
            return $this->valueHolderd5cad->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5cad;

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

        $targetObject = $this->valueHolderd5cad;
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
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5cad;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd5cad;
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
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, '__isset', array('name' => $name), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5cad;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd5cad;
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
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, '__unset', array('name' => $name), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5cad;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd5cad;
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
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, '__clone', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        $this->valueHolderd5cad = clone $this->valueHolderd5cad;
    }

    public function __sleep()
    {
        $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, '__sleep', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;

        return array('valueHolderd5cad');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer101d3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer101d3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer101d3 && ($this->initializer101d3->__invoke($valueHolderd5cad, $this, 'initializeProxy', array(), $this->initializer101d3) || 1) && $this->valueHolderd5cad = $valueHolderd5cad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd5cad;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd5cad;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
