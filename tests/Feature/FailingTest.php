<?php

namespace Tests\Feature;

use Tests\TestCase;

class FailingTest extends TestCase
{
    /**
     * @test
     */
    public function failing()
    {
        // 期待値 true なのに実際の値は false なので失敗する
        $this->assertTrue(false);
    }
}
