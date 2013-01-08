<?php

class nullObj {

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

}