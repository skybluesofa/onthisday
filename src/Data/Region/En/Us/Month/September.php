<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Carbon\Carbon;

class September extends Month {
    public static $recurringEvents = [
       "3" => ["Welsh Rarebit Day"],
       "5" => ["Cheese Pizza Day"],
       "8" => ["Date-Nut Bread Day"],
      "11" => ["Hot Cross Bun Day"],
      "12" => ["Chocolate Milkshake Day"],
      "14" => ["Cream-Filled Donut Day"],
      "15" => ["Creme de Menthe Day"],
      "16" => ["Cinnamon-Raisin Bread Day"],
      "17" => ["Apple Dumpling Day"],
      "18" => ["Play-Dough Day"],
      "19" => ["Butterscotch Pudding Day"],
      "20" => ["Punch Day"],
      "21" => ["Pecan Cookie Day"],
      "22" => ["White Chocolate Day"],
      "25" => ["Cooking Day"],
      "26" => ["Pancake Day"],
      "28" => ["Strawberry Cream Pie Day"],
      "29" => ["Coffee Day"],
      "30" => ["Mulled Cider Day"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [
      "first Monday of September %Y" => ["Labor Day"]
    ];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
