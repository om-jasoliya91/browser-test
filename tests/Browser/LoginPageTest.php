<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginPageTest extends DuskTestCase
{
    /**
     * Check if login page loads correctly.
     */
    public function testLoginPageLoads(): void
    {
        $user = User::factory()->create([
            'email' => 'test1@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/login')
                ->screenshot('login-page')
                ->type('email', 'hello@gmail.com')
                ->type('password', 'password')
                ->assertSee('Login');
        });
    }
}

// vendor/laravel/dusk/bin/chromedriver-linux --port=9515
// ./vendor/bin/pest --filter=UserTest
// ./vendor/bin/pest --filter=ExampleTest
