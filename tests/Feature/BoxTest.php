<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Box;

class BoxTest extends TestCase
{
    /**
     * test the add() method of Box class.
     *
     * @return void
     */
    public function test_box_add()
    {
        $box = new Box(['apple', 'banana', 'cherry']);

        $this->assertCount(4, $box->add('lemon'));
    }

    /**
     * test the remove() method of Box class.
     *
     * @return void
     */
    public function test_box_remove()
    {
        $box = new Box(['apple', 'banana', 'cherry']);

        $this->assertCount(2, $box->remove('banana'));
    }
}
