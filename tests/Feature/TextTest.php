<?php

namespace DingNotice\Tests\Feature;

use DingNotice\Tests\TestCase;


class TextTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->setUp();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPushTextMessage()
    {

        $this->ding->text("我就是我,@{$this->testUser} 是不一样的烟火");
        $this->assertTrue(true);
    }
}