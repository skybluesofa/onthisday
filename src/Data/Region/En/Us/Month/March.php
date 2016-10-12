<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Skybluesofa\OnThisDay\Data\Region\En\Us\Helpers\Easter;

class March extends Month {
    public static $recurringEvents = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];

        if ($date->toDateString() == Easter::getFatTuesdayDate($date)->toDateString()) {
            $events[] = "Fat Tuesday";
        }
        if ($date->toDateString() == Easter::getMardiGrasDate($date)->toDateString()) {
            $events[] = "Mardi Gras";
        }

        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];

        if ($date->toDateString() == Easter::getEasterDate($date)->toDateString()) {
            $events[] = "Easter";
        }

        return $events;
    }
}
