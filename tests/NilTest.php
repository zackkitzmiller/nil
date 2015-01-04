<?php

use ZackKitzmiller\Nil;

class NilTest extends PHPUnit_Framework_TestCase {

    protected $nil;

    public function setUp() {
        $this->nil = Nil::getInstance();
    }

    public function testStringIsNull() {
        $ret = (string)$this->nil;
        $this->assertEquals($ret, null);
    }

    public function testArrayAccess() {
        foreach ($this->nil as $n) {}
        $this->nil[89];
    }

    public function testMethodCall() {
        $this->nil->dontBreak();
    }

    public function testAccessVariable() {
        $this->nil->partyTime;
    }

    public function testJsonEncode() {
        $obj = json_decode(json_encode($this->nil));
        $this->assertEquals($obj, new stdClass);
    }

    public function testGetter() {
        $this->assertEquals($this->nil->it->can->be->chained(), $this->nil);
    }
}
