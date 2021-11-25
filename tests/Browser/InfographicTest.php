<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use App\Models\User;
use Tests\DuskTestCase;

/**
 * @internal
 * @coversNothing
 */
class InfographicTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.infographics.index'));
            $browser->assertRouteIs('admin.infographics.index');
        });
    }
}
