<?php
namespace Skybluesofa\OnThisDay\Data\Contract;

use Skybluesofa\Chainable\Traits\Chainable;
use Carbon\Carbon;

abstract class Month {
    use Chainable;

    /*
    An array of dates and events in this format:
    [ '31' => ['abc','xyz'], ]
    Where:
    '31' means the 31st of the month named by the name of the object of any given year
    'abc' and 'xyz' are events for the 31st day of this month
    */
    public static $recurringEvents = [];

    /*
    An array of holidays in this format:
    [ '0131' => ['abc','xyz'], ]
    Where:
    '31' means the 31st of the month named by the name of the object of any given year
    'abc' and 'xyz' are holidays for the 31st day of this month
    */
    public static $recurringHolidays = [];

    /*
    An array of dates and events in this format:
    [ '2008' =>
        [ '31' => ['abc','xyz'], ],
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
        [ '31' => ['abc','xyz'], ],
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
        "second Monday of January %Y" => ["lmn"],
        "last Monday of January %Y" => ["pqr"],
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
        "second Monday of January %Y" => ["lmn"],
        "last Monday of January %Y" => ["pqr"],
    ]
    Where:
    The key is 'strtotime()' parseable and %Y is replaceable by the current year
    The value is an array of holidays for the given date
    */
    public static $configurationHolidays = [];

    /*
    An array of events in this format:
    [
        "Some Event" => "_getSomeEventDate",
        "Another Event" => "_getAnotherEventDate"
    ]
    Where:
    The key is the Name of the event
    The value is a private method reference on the object. The private method
    returns a single or array of Carbon dates for the event.
    */
    public static $recurringAdvancedConfigurationEvents = [];

    /*
    An array of holidays in this format:
    [
        "Some Holiday" => "_getSomeHolidayDate",
        "Another Holiday" => "_getAnotherHolidayDate"
    ]
    Where:
    The key is the Name of the holiday
    The value is a private method reference on the object. The private method
    returns a single or array of Carbon dates for the holiday.
    */
    public static $recurringAdvancedConfigurationHolidays = [];

    /*
    Returns an array of dates and events created by some rules
    */
    public static function getRecurringAdvancedConfigurationBasedEvents(Carbon $date) {
        $class = new Static;
        $events = $class::$recurringAdvancedConfigurationEvents;

        foreach ($events as $event=>$methodName) {
          $events[$event] = (method_exists($class, $methodName)) ? call_user_func([$class, $methodName], $date) : null;
        }

        return $events;
    }

    /*
    Returns an array of holidays created by some rules
    */
    public static function getRecurringAdvancedConfigurationBasedHolidays(Carbon $date) {
        $class = new Static;
        $events = $class::$recurringAdvancedConfigurationHolidays;

        foreach ($events as $event=>$methodName) {
          $events[$event] = (method_exists($class, $methodName)) ? call_user_func([$class, $methodName], $date) : null;
        }

        return $events;
    }
  }
