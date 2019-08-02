<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/')

        ->assertStatus(200);
    }
    public function testUsuarios()
    {
         $this->get('/usuarios')
        ->assertStatus(200)
                 ->assertSee('Listado De Usuarios')
                 ->assertSee('Joel');
    }
    public function testUsuariosNuevo()
    {
         $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear nuevo usuario');
        
    }public function testUsuariosId()
    {
         $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalle del usuario: 5');
        
    }
}
