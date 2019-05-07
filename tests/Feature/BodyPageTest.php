<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BodyPageTest extends TestCase
{
    /** @test */
    Public function it_shows_the_body()
    {
        /** permet de verifier si la page d'accueil s'affiche bien */
        $reponse = $this->get('/');

        /** verifier la reponse */
        $reponse->assertSuccessFul();
        
        /** verifier si la vue est retournee par le controleur */
        $reponse->assertViewIs('body');
    }
}
