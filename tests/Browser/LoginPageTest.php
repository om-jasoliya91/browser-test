<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginPageTest extends DuskTestCase
{
    /**
     * Check if login page loads correctly.
     */
    public function testLoginPageLoads(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/login')
                ->screenshot('login-page')
                ->assertSee('Login');
        });
    }
}
