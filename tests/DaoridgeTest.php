<?php
/**
 * Tests for DaoRidge
 */

use PHPUnit\Framework\TestCase;
use Daoridge\Daoridge;

class DaoridgeTest extends TestCase {
    private Daoridge $instance;

    protected function setUp(): void {
        $this->instance = new Daoridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daoridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
