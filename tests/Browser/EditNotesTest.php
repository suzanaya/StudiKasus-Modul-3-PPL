<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser): void {
            $this->browse(function (Browser $browser) {
                $browser->visit('/')
                    ->assertSee('Enterprise Application Development')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'Suzan@gmail.com')
                    ->type('password', 'Suzanaya')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee("You're logged in!")
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->clickLink('Edit')
                    ->assertPathIs('/edit-note-page/2')
                    ->type('title', 'Telkom University Bandung')
                    ->type('description', 'Kelas SI4609')
                    ->press('UPDATE');
                });
        });
    }
}
