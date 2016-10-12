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

    public static $recurringAdvancedConfigurationEvents = [
      "Fat Tuesday", "Mardi Gras"
    ];

    public static $recurringAdvancedConfigurationHolidays = [
      "Easter"
    ];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
      $events = self::$recurringAdvancedConfigurationEvents;

      if ($date->toDateString() != Easter::getFatTuesdayDate($date)->toDateString()) {
        unset ($events[array_search("Fat Tuesday",$events)]);
      }
      if ($date->toDateString() != Easter::getMardiGrasDate($date)->toDateString()) {
        unset ($events[array_search("Mardi Gras",$events)]);
      }

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
