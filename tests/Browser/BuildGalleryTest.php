<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * @internal
 * @coversNothing
 */
class BuildGalleryTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.build-galleries.index'));
            $browser->assertRouteIs('admin.build-galleries.index');
        });
    }
}
