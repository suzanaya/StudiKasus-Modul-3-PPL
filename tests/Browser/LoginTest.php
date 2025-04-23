<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit(url: '/')
                    ->assertSee(text: 'Enterprise Application Development')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'suzan@gmail.com')
                    ->type(field: 'password', value: 'Suzanaya')
                    ->press(button: 'LOG IN');
        });
    }
}
