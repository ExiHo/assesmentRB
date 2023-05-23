<?php

namespace Lib;

/**
 * Singleton Class
 *
 * This class provides a singleton pattern implementation.
 * It allows for only one instance of the class to be created and accessed globally.
 */
class Singleton
{
    /**
     * @var array $instances An array to keep track of the instances created for each subclass.
     */
    private static $instances = [];

    /**
     * Private constructor to prevent creating new instances of the class.
     */
    protected function __construct()
    {
    }

    /**
     * Protected clone method to prevent duplicating the instance of the class.
     */
    protected function __clone()
    {
    }

    /**
     * Throw an exception when trying to deserialize the instance.
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    /**
     * Get an instance of the subclass.
     */
    public static function getInstance()
    {
        $subclass = static::class;

        // create a new instance if it has not been created before
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        // return the stored instance
        return self::$instances[$subclass];
    }
}
