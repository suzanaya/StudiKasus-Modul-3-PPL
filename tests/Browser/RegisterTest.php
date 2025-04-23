<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit(url: '/')
                    ->assertSee(text: 'Modul 3')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'name', value: 'Suzan')
                    ->type(field: 'email', value: 'suzan@gmail.com')
                    ->type(field: 'password', value: 'Suzanaya')
                    ->type(field: 'password_confirmation', value: 'Suzanaya')
                    ->press(button: 'REGISTER');
        });
    }
}
