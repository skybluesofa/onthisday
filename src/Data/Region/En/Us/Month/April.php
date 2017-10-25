<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Skybluesofa\OnThisDay\Data\Region\En\Us\Helpers\Easter;
use Carbon\Carbon;

class April extends Month {
    public static $recurringEvents = [
        "1"  => [],
        "2"  => ["Pascua Florida Day"],
        "3"	 => ["Pascua Florida Day observed"],
        "4"  => [],
        "5"  => [],
        "6"	 => ["National Tartan Day"],
        "7"  => [],
        "8"  => [],
        "9"  => ["Palm Sunday"],
        "11" => ["Passover (first day)", "National Library Workers' Day"],
        "12" => [],
        "13" => ["Maundy Thursday", "Thomas Jefferson's Birthday"],
        "14" => ["Orthodox Good Friday", "Good Friday"],
        "15" => ["Holy Saturday", "Orthodox Holy Saturday", "Father Damien Day"],
        "16" => ["Orthodox Easter", "Easter Sunday", "Emancipation Day"],
        "17" => ["Orthodox Easter Monday", "Easter Monday", "Emancipation Day observed", "Patriot's Day"],
        "18" => ["Last Day of Passover", "Tax Day	Observance"],
        "19" => [],
        "20" => [],
        "21" => ["San Jacinto Day"],
        "22" => ["Oklahoma Day"],
        "23" => [],
        "24" => ["Yom HaShoah", "Isra and Mi'raj", "Confederate Memorial Day", "State Holiday Georgia", "State holiday Mississippi"],
        "25" => [],
        "26" => ["State Holiday	Florida", "Administrative Professionals Day"],
        "27" => ["Take our Daughters and Sons to Work Day"],
        "28" => ["Arbor Day"],
        "29" => [],
        "30" => []
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
