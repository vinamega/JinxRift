<?php
/**
 * Tests for JinxRift
 */

use PHPUnit\Framework\TestCase;
use Jinxrift\Jinxrift;

class JinxriftTest extends TestCase {
    private Jinxrift $instance;

    protected function setUp(): void {
        $this->instance = new Jinxrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Jinxrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
