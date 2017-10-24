<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Carbon\Carbon;

class September extends Month {
    public static $recurringEvents = [
        "1" => [],
        "2" => [],
        "3" => ["Farewell Day"],
        "4" => ["Labor Day"],
        "5" => ["International Day of Charity"],
        "6" => [],
        "7" => [],
        "8" => ["International Literacy Day"],
        "9" => ["Carl Garner Federal Lands Cleanup Day"],
        "10"=> ["Grandparents Day"],
        "11"=> ["Patriot Day"],
        "15"=> ["International Day of Democracy"],
        "16"=> ["Selichot", "Oktoberfest (Start)"],
        "17"=> ["Constitution Day"],
        "18"=> ["National Cheeseburger Day"],
        "20"=> ["Rosh Hashana (Start)"],
        "21"=> ["Islamic new year", "St Matthew", "International Day of Peace"],
        "22"=> ["Rosh Hashana (End)", "Equinox/Fall begins", "World Rhino Day"],
        "30"=> ["Ashura", "Yom Kippur"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
