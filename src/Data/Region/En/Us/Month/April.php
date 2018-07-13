<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Skybluesofa\OnThisDay\Data\Region\En\Us\Helpers\Easter;
use Carbon\Carbon;

class April extends Month {
    public static $recurringEvents = [
       "1" => ["Sourdough Bread Day", "April Fool's Day"],
       "2" => ["Peanut Butter and Jelly Day"],
       "3" => ["Chocolate Mousse Day"],
       "4" => ["Cordon Bleu Day"],
       "5" => ["Raisin & Spice Bar Day"],
       "6" => ["Caramel Popcorn Day"],
       "7" => ["Coffee Cake Day"],
       "8" => ["Empanada Day"],
       "9" => ["Chinese Almond Cookie Day"],
      "10" => ["Cinnamon Crescent Day"],
      "11" => ["Cheese Fondue Day"],
      "12" => ["Licorice Day"],
      "13" => ["Peach Cobbler Day"],
      "14" => ["Pecan Day", "Hot Cross Bun Day"],
      "15" => ["Glazed Ham Day"],
      "16" => ["Eggs Benedict Day", "Baked Ham with Pineapple Day"],
      "17" => ["Cheeseball Day"],
      "18" => ["Animal Crackers Day"],
      "20" => ["Pineapple Upside-down Cake Day"],
      "21" => ["Chocolate-Covered Cashews Day"],
      "22" => ["Jelly Bean Day"],
      "23" => ["Cherry Cheesecake Day"],
      "24" => ["Pigs-in-a-Blanket Day"],
      "25" => ["Zucchini Bread Day"],
      "26" => ["Pretzel Day"],
      "27" => ["Prime Rib Day"],
      "28" => ["Blueberry Pie Day"],
      "29" => ["Shrimp Scampi Day"],
      "30" => ["Oatmeal Cookie Day"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [
      "Easter" => "_getEasterDate",
    ];

    public static function _getEasterDate(Carbon $date) {
      return Easter::getEasterDate($date);
    }
}
