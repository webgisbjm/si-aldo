<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * @internal
 * @coversNothing
 */
class ContentCategoryTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.content-categories.index'));
            $browser->assertRouteIs('admin.content-categories.index');
        });
    }
}
