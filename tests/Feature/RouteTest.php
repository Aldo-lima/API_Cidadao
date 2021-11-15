<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutTest extends TestCase
{
    /**
     * A teste das rotas.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->getjson('/api/cidadoes');
        $response = $this->getjson('/api/cidadao/1');
        $response = $this->getjson('/api/cidadaocpf');
        $response = $this->deletejson('/api/cidadao/delete/3');
        $response = $this->putjson('/api/cidadao/update/3');

        $response->assertStatus(200);

        
    }
}
