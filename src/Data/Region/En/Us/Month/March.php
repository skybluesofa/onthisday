<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Skybluesofa\OnThisDay\Data\Region\En\Us\Helpers\Easter;
use Carbon\Carbon;

class March extends Month {
    public static $recurringEvents = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [
      "Fat Tuesday" => "_getFatTuesdayDate",
      "Mardi Gras" => "_getMardiGrasDate",
    ];

    public static $recurringAdvancedConfigurationHolidays = [
      "Easter" => "_getEasterDate",
    ];

    public static function _getFatTuesdayDate(Carbon $date) {
      return Easter::getFatTuesdayDate($date);
    }

    public static function _getMardiGrasDate(Carbon $date) {
      return Easter::getMardiGrasDate($date);
    }

    public static function _getEasterDate(Carbon $date) {
      return Easter::getEasterDate($date);
    }

}
