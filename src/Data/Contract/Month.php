<?php
namespace Skybluesofa\OnThisDay\Data\Contract;

abstract class Month {

    /*
    An array of dates and events in this format:
    [ '31' => ['abc','xyz'] ]
    Where:
    '31' means the 31st of the month named by the name of the object of any given year
    'abc' and 'xyz' are events for the 31st day of this month
    */
    public static $recurringEvents = [];

    /*
    An array of holidays in this format:
    [ '31' => ['abc','xyz'] ]
    Where:
    '31' means the 31st of the month named by the name of the object of any given year
    'abc' and 'xyz' are holidays for the 31st day of this month
    */
    public static $recurringHolidays = [];

    /*
    An array of dates and events in this format:
    [ '2008' =>
        [ '31' => ['abc','xyz'] ]
    ]
    Where:
    '2008' is the specific year for these events
    '31' means the 31st of the month named by the name of the object of the given year
    'abc' and 'xyz' are events for the 31st day of this month for the year 2008
    */
    public static $specificDateEvents = [];

    /*
    An array of holidays in this format:
    [ '2008' =>
        [ '31' => ['abc','xyz'] ]
    ]
    Where:
    '2008' is the specific year for these holidays
    '31' means the 31st of the month named by the name of the object of the given year
    'abc' and 'xyz' are holidays for the 31st day of this month for the year 2008
    */
    public static $specificDateHolidays = [];

    /*
    An array of dates and events in this format:
    [
        "first Monday of January %Y" => ["abc", "xyz"],
        "second Monday of January %Y" => ["lmn"]
        "last Monday of January %Y" => ["pqr"]
    ]
    Where:
    The key is 'strtotime()' parseable and %Y is replaceable by the current year
    The value is an array of events for the given date
    */
    public static $configurationEvents = [];

    /*
    An array of holidays in this format:
    [
        "first Monday of January %Y" => ["abc", "xyz"],
        "second Monday of January %Y" => ["lmn"]
        "last Monday of January %Y" => ["pqr"]
    ]
    Where:
    The key is 'strtotime()' parseable and %Y is replaceable by the current year
    The value is an array of holidays for the given date
    */
    public static $configurationHolidays = [];

    /*
    Returns an array of dates and events created by some rules
    */
    public static function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        return [];
    }

    /*
    Returns an array of holidays created by some rules
    */
    public static function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        return [];
    }

    public function parsedDay(Carbon $date, $modifier=null) {
        $monthStartDate = Carbon::now();
        $monthStartDate->setDateTime($currentDate->year, $currentDate->month, 1, 0, 0, 0);

        return $date == Carbon::createFromTimestamp(strtotime("1 Monday", $monthStartDate->timestamp));
    }

    protected static function isLeapYear($year) {
        return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
    }
}
