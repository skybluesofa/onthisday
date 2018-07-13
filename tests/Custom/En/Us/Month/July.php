<?php

namespace Skybluesofa\OnThisDayTest\Custom\En\Us\Month;

use \Skybluesofa\OnThisDay\Data\Contract\Month;
use \Carbon\Carbon;

class July extends Month
{
    public static $recurringEvents = [
        "1" => ["Some Custom Event"],
    ];

    public static $recurringHolidays = [];

    public static $specificDateEvents = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date)
    {
        $events = [];
        return $events;
    }

    public static function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
