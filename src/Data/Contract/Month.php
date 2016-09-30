<?php
namespace Skybluesofa\OnThisDay\Data\Contract;

abstract class Month {
    /*
    An array of dates and events in this format:
    [ 'en_US' =>
        [ '0131' => ['abc','xyz'] ]
    ]
    Where:
    'en_US' is the locale
    '0131' means the 31st of January of any given year
    'abc' and 'xyz' are events for January 31
    */
    public static $recurringEvents = [];

    /*
    An array of dates and events in this format:
    [ 'en_US' =>
        [ '2008' =>
            [ '0131' => ['abc','xyz'] ]
        ]
    ]
    Where:
    'en_US' is the locale
    '2008' is the specific year for these events
    '0131' means the 31st of January of the given year
    'abc' and 'xyz' are events for January 31, 2008
    */
    public static $specificDateEvents = [];

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

    abstract static function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date);

    public function parsedDay(Carbon $date, $modifier=null) {
        $monthStartDate = Carbon::now();
        $monthStartDate->setDateTime($currentDate->year, $currentDate->month, 1, 0, 0, 0);

        return $date == Carbon::createFromTimestamp(strtotime("1 Monday", $monthStartDate->timestamp));
    }
}
