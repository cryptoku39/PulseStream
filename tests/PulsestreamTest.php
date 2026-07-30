<?php
/**
 * Tests for PulseStream
 */

use PHPUnit\Framework\TestCase;
use Pulsestream\Pulsestream;

class PulsestreamTest extends TestCase {
    private Pulsestream $instance;

    protected function setUp(): void {
        $this->instance = new Pulsestream(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pulsestream::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
