<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertSee('Register')
                    ->value('#name','user2')
                    ->value('#email','user2@gmail.com')
                    ->value('#password','123456789')
                    ->value('#password-confirm','123456789')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/home');
        });
    }
}
