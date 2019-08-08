<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PokemonApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return test
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Pokemon Finder');
    }
    /**
     * @test
     */
    function busqueda_exitosa()
    {
         $response = $this->get('/char');

        $response->assertStatus(200);
        $response->assertSee('charmander');
        $response->assertSee('charmeleon');
        $response->assertSee('charizard');
        
    }
   

}
