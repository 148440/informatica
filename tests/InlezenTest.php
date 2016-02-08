<?php

include_once 'inlezen.php';

class InlezenTest extends PHPUnit_Framework_TestCase {

    public function testInlezen() {
        $d = inlezen('./tests/data/tst1.txt');
        $this->assertTrue(is_array($d), 'is array');
        $this->assertEquals(2, count($d), 'wz en woorden');
        $this->assertTrue(is_array($d[0]), 'wz is array');
        $this->assertTrue(is_array($d[1]), 'woorden is array');

        $this->assertTrue(is_array($d[0]), 'wz is 2D array');
        $this->assertTrue(is_array($d[1]), 'woorden is 2D array');
print_r($d[0]);
        $this->assertEquals(2, count($d[0]), 'wz contains 2 elements');
        $this->assertEquals(1, count($d[1]), '1 element');
        $wz = array(str_split('--aap'), str_split('-pop-'));
        $this->assertEquals($wz, $d[0], 'wz inhoud');
        $this->assertEquals(array(str_split('aap')), $d[1], 'woorden inhoud');
    }

}
