<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser): void {
            $browser->visit(url: '/')
                    ->assertSee(text: 'Enterprise Application Development')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'suzan@gmail.com')
                    ->type('password', 'Suzanaya')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee("You're logged in!")
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->clickLink('Create Note')
                    ->assertPathIs('/create-note')
                    ->type('title', 'Telkom University')
                    ->type('description', 'SI 46 09')
                    ->press('CREATE');
    
        });
    }
}
