<?php
namespace Skybluesofa\OnThisDay\Data\Month\En\Us;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class August extends Month {
    public static $recurringEvents = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
