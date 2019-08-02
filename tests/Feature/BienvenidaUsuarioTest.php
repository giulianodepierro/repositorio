<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BienvenidaUsuarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   function UsuarioConNick()
    {
        $this->get('saludo/duilio/silence')
            ->assertStatus(200)
            ->assertSee('Bienvenido Duilio, tu apodo es silence');
    }
    
    /** @test */
    function UsuarioSinNick()
    {
        $this->get('saludo/duilio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Duilio');
    }
}
