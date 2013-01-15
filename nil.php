<?php

if (PHP_VERSION_ID < 50400) {
  interface Nilectionable extends Iterator, ArrayAccess { }
} else {
  interface Nilectionable extends Iterator, ArrayAccess, JsonSerializable { }
}

class Nil implements Nilectionable
{

    protected static $instance;

    private function __construct() { }
    private function __clone() { }

    public function __invoke() {
        return self::getInstance();
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof Nil) {
            self::$instance = new Nil;
        }

        return self::$instance;
    }

    public function __call($name, $arguments)
    {
        return self::getInstance();
    }

    public static function __callStatic($name, $arguments)
    {
        return self::getInstance();
    }

    public function __toString()
    {
        return (string)null;
    }

    public function __sleep()
    {
        return array();
    }

    public function __wakeup()
    {
        self::getInstance();
    }

    // must implement jsonSerialize
    public function jsonSerialize()
    {
        return new stdClass;
    }

    // must implement current, next, key, rewind, and valid
    public function current()
    {
        return self::getInstance();
    }

    public function next() { }

    public function key()
    {
        return self::getInstance();
    }

    public function valid()
    {
        return false;
    }

    public function rewind() { }

    // must implement offsetExists, offsetGet, offsetSet, offsetUnset
    public function offsetExists($offset)
    {
        return false;
    }

    public function offsetGet($offset)
    {
        return self::getinstance();
    }

    public function offsetSet($offset, $value) { }
    public function offsetUnset($offset) { }
}
