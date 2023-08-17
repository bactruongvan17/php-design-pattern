<?php 

class Singleton
{
    private static $instances = [];

    /**
     * To prevent using `new` keyword to create new instance
     */ 
    protected function __construct() {}

    /**
     * Singleton should not be cloneable 
     */
    protected function __clone() {}

    /**
     * Singleton should not be restoreable from strings
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        $cls = static::class;

        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }
}

function clientCode() 
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();

    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.\n";
    } else {
        echo "Singleton failed, variables contain different instances.\n";
    }
}

clientCode();