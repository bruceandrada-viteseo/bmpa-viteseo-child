<?php
use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase {

    public function test_true_is_true() {
        echo "RUNNING SIMPLE TEST\n";
        $this->assertTrue( true );
    }

}
