<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Carbon\Carbon;

class August extends Month {
    public static $recurringEvents = [
       "1" => ["Raspberry Cream Pie Day"],
       "2" => ["Ice Cream Sandwich Day", "Ice Cream Soda Day"],
       "3" => ["Watermelon Day"],
       "4" => ["Chocolate Chip Day"],
       "5" => ["Mustard Day"],
       "6" => ["Root Beer Float Day"],
       "7" => ["Raspberries 'n Cream Day"],
       "8" => ["Frozen Custard Day"],
       "9" => ["Rice Pudding Day"],
      "10" => ["S'mores Day"],
      "11" => ["Raspberry Bombe Day"],
      "14" => ["Creamsicle Day"],
      "15" => ["Lemon Meringue Pie Day"],
      "17" => ["Vanilla Custard Day"],
      "18" => ["Ice Cream Pie Day"],
      "19" => ["Soft Ice Cream Day"],
      "20" => ["Chocolate Pecan Pie Day"],
      "21" => ["Spumoni Day"],
      "22" => ["Pecan Torte Day"],
      "23" => ["Spongecake Day"],
      "24" => ["Peach Pie Day"],
      "25" => ["Banana Split Day"],
      "26" => ["Cherry Popsicle Day"],
      "27" => ["Pots de Creme Day"],
      "28" => ["Cherry Turnovers Day"],
      "30" => ["Toasted Marshmallow Day"],
      "31" => ["Trail Mix Day"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
