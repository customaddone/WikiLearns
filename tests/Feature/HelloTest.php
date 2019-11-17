<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

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
        /*
            phpunitの<php>欄に
            <server name="DB_DSN" value="mysql:dbname=test_database;host=localhost" />
            <server name="DB_USER" value="root" />
            <server name="DB_PASSWD" value="secret" />
            <server name="DB_DBNAME" value="wikiLearns" />
            を記述する
        */
        $this->assertTrue(0 < 1);

        $first = factory(User::class)->create();
        $first->save();
    }
}
