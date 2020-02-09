<?php

// namespace MilanTarami\NepaliCalendar\Tests;

use MilanTarami\NepaliCalendar\Facades\NepaliCalendar;
use Orchestra\Testbench\TestCase;

class NepaliCalendarTest extends TestCase
{
    /** @test */
    public function AD2BS()
    {
        $adDate = NepaliCalendar::AD2BS('2020-12-10');
        $this->assertTrue(true, 'ad 2 bs');
    }


    // When testing inside of a Laravel installation, this is not needed
    protected function getPackageProviders($app)
    {
        return [
            'MilanTarami\NepaliCalendar\NepaliCalendarServiceProvider'
        ];
    }
    // // When testing inside of a Laravel installation, this is not needed
    // protected function setUp()
    // {
    //     parent::setUp();
    // }
}
