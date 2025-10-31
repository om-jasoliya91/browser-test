<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                // ->screenshot('welcome-page')
                ->assertSee('Dashboard');  // 👈 change this to any text visible on your homepage
        });
    }
    //  public function test_the_application_returns_a_successful_response(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
}
