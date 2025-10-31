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
                ->screenshot('homepage')  // 👈 this will save a screenshot named 'homepage.png'
                ->assertSee('Dashboard');  // 👈 change this to any text visible on your homepage
        });
    }
}
