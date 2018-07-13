<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Carbon\Carbon;

class June extends Month {
    public static $recurringEvents = [
       "1" => ["Hazelnut Cake Day"],
       "2" => ["Rocky Road Day"],
       "3" => ["Chocolate Macaroon Day"],
       "5" => ["Gingerbread Day"],
       "6" => ["Applesauce Cake Day"],
       "7" => ["Chocolate Ice Cream Day"],
       "9" => ["Strawberry-Rhubarb Pie Day"],
      "11" => ["German Chocolate Cake Day"],
      "12" => ["Peanut Butter Cookie Day"],
      "13" => ["Kitchen Klutzes of America Day"],
      "14" => ["Strawberry Shortcake Day"],
      "16" => ["Fudge Day"],
      "17" => ["Apple Strudel Day"],
      "17" => ["Cherry Tart Day"],
      "21" => ["Peaches & Cream Day"],
      "22" => ["Chocolate Eclair Day"],
      "23" => ["Pecan Sandies Day"],
      "24" => ["Pralines Day"],
      "25" => ["Strawberry Parfait Day"],
      "26" => ["Chocolate Pudding Day"],
      "29" => ["Almond Buttercrunch Day"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
    	"third Sundays of June %y" => ["Father's Day"],
    ];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
