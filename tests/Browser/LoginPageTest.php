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
                ->type('email', 'test@gmail.com')
                ->type('password', 'password')
                ->screenshot('login-page')
                ->assertSee('Login');
        });
    }
}
// vendor/laravel/dusk/bin/chromedriver-linux --port=9515
// ./vendor/bin/pest --filter=UserTest
// ./vendor/bin/pest --filter=ExampleTest