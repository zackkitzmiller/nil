<?php

class nullObj implements Iterator, JsonSerializable {

    public function __call($x, $y) {
        return;
    }

    public static function __callStatic($x, $y) {
        return;
    }

    public function __toString() {
        return (string)null;
    }

    public function __sleep() {
        return array();
    }

    public function __wakeup() {
        return array();
    }

    // must implement jsonSerialize
    public function jsonSerialize() {
        return (string)null;
    }

    // must implement current, next, key, rewind, and valid
    public function current() {
        return null;
    }

    public function next() {
        return null;
    }

    public function key() {
        return null;
    }

    public function valid() {
        return false;
    }

    public function rewind() { }
}