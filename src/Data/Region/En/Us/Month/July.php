<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Carbon\Carbon;

class July extends Month {
    public static $recurringEvents = [
       "1" => ["Gingersnap Day"],
       "2" => ["Anisette Day"],
       "3" => ["Chocolate Wafer Day"],
       "4" => ["Barbecue Day", "Independence Day"],
       "5" => ["Apple Turnover Day"],
       "6" => ["Fried Chicken Day"],
       "7" => ["Strawberry Sundae Day", "Macaroni Day"],
       "8" => ["Milk Chocolate with Almonds Day"],
       "9" => ["Sugar Cookie Day"],
      "10" => ["Pina Colada Day"],
      "11" => ["Blueberry Muffin Day"],
      "12" => ["Pecan Pie Day"],
      "15" => ["Tapioca Pudding Day"],
      "17" => ["Peach Ice Cream Day"],
      "18" => ["Caviar Day"],
      "20" => ["Ice Cream Day", "Lollipop Day"],
      "21" => ["Creme Brulee Day"],
      "22" => ["Penuche Day"],
      "23" => ["Vanilla Ice Cream Day"],
      "25" => ["Hot Fudge Sundae Day"],
      "26" => ["Bagelfest"],
      "28" => ["Milk Chocolate Day"],
      "29" => ["Lasagna Day"],
      "30" => ["Cheesecake Day"],
      "31" => ["Raspberry Cake Day"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
