<?php

class nullObj implements JsonSerializable {

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

    public function jsonSerialize() {
        return (string)null;
    }

}