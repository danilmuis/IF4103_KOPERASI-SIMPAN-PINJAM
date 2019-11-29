<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class transaksiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testSimpan()
    {
        $debit = 60000;

        $obj = new \App\transaksi();

        $this->assertEquals($debit,$obj->simpan(10000));
        
    }
}
