<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

/**
 * @internal
 * @coversNothing
 */
class SanitationTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.sanitations.index'));
            $browser->assertRouteIs('admin.sanitations.index');
        });
    }
}
