<?php
/**
 * Tests for ChainTide
 */

use PHPUnit\Framework\TestCase;
use Chaintide\Chaintide;

class ChaintideTest extends TestCase {
    private Chaintide $instance;

    protected function setUp(): void {
        $this->instance = new Chaintide(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaintide::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
