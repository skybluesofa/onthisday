<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class April extends Month {
    public static $recurringEvents = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [
      "Easter"
    ];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = self::$recurringAdvancedConfigurationEvents;
        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = self::$recurringAdvancedConfigurationHolidays;

        if ($date->toDateString() != Easter::getEasterDate($date)->toDateString()) {
            unset ($events[array_search("Easter",$events)]);
        }
        
        return $events;
    }
}
