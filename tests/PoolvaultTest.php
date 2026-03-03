<?php
/**
 * Tests for PoolVault
 */

use PHPUnit\Framework\TestCase;
use Poolvault\Poolvault;

class PoolvaultTest extends TestCase {
    private Poolvault $instance;

    protected function setUp(): void {
        $this->instance = new Poolvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Poolvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
