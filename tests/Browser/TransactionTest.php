<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TransactionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group transaksi
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->maximize();

            $browser->visit('/')
                    ->click('a#loginBTN')
                    ->type('username', 'pelajar')
                    ->type('password', '123123123')
                    ->assertSee('Login')
                    ->press('Login')
                    ->clickLink('Courses')
                    ->assertPathIs('/course')
                    ->clickLink('Beli Kelas')
                    ->assertPathIs('/checkout/2');
            
            $browser->script('window.scrollTo(0, 1500);');

            $browser->pause(1000)
                    ->press('Pay Now')
                    ->pause(1000)
                    ->press('sudah')
                    ->pause(1000)
                    ->clickLink('sudah')
                    ->assertPathIs('/konfirmasi/2')
                    ->attach('input#evidence', storage_path('app\public\bukti_bayar\bukti-bayar.jpeg'));
            
            $browser->script('window.scrollTo(0, 1500);');

            $browser->pause(1000)
                    ->press('Pay now')
                    ->assertPathIs('/sukses')
                    ->clickLink("Selesai")
                    ->assertPathIs('/user/order')
                    ->press('pelajar')
                    ->press('Logout')
                    ->assertPathIs('/')
                    ->clickLink('Login sebagai  Guru Ternak')
                    ->assertPathIs('/guruternak/login')
                    ->type('username', 'darto123')
                    ->type('password', '123123123')
                    ->assertSee('Login')
                    ->press('Login')
                    ->press('Confirm')
                    ->press('darto123')
                    ->press('Logout')
                    ->assertPathIs('/')
                    ->click('a#loginBTN')
                    ->type('username', 'pelajar')
                    ->type('password', '123123123')
                    ->assertSee('Login')
                    ->press('Login')
                    ->assertPathIs('/')
                    ->press('pelajar')
                    ->clickLink('My Course')
                    ->assertPathIs('/user/class')
                    ->clickLink('Start Learn')
                    ->pause(5000);
        });
    }
}
