<?php
namespace Skybluesofa\OnThisDay\Data\Month\En\Us;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class December extends Month
{
    public static $recurringEvents = [
        '6' => ['St Nicholas\' Day'],
        '7' => ['Pearl Harbor Remembrance Day'],
        '13' => ['National Guard Birthday'],
        '17' => ['Pan American Aviation Day', 'Wright Brothers Day'],
        '24' => ['Christmas Eve'],
        '25' => ['Christmas'],
        '26' => ['Day After Christmas Day'],
        '31' => ['New Year\'s Eve']
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date)
    {
        $events = [];
        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date)
    {
        $events = [];
        return $events;
    }
}
