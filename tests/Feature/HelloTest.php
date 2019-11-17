<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // 簡単なテスト実施 vendor/bin/phpunitで実施
    public function testHello()
    {
        $this->assertTrue(0 < 1);

        $arr = [];
        $this->assertEmpty($arr);
    }
}
