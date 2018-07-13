<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use \Skybluesofa\OnThisDay\Data\Contract\Month;
use \Carbon\Carbon;

class May extends Month {
    public static $recurringEvents = [];

    public static $recurringHolidays = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }

    public static function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
