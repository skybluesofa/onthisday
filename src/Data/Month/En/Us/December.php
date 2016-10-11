<?php
namespace Skybluesofa\OnThisDay\Data\Month\En\Us;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class December extends Month
{
    public static $recurringEvents = [
        "1" => ["Civil Air Patrol (USAF Auxiliary) Birthday", "Eat a Red Apple Day", "National Pie Day"],
        "2" => ["National Fritters Day"],
        "3" => ["National Apple Pie Day"],
        "4" => ["National Cookie Day"],
        "5" => ["Day of the Ninja", "International Volunteers Day", "Bathtub Party Day"],
        "6" => ["St Nicholas' Day", "Miners' Day", "Microwave Oven Day"],
        "7" => ["Pearl Harbor Remembrance Day", "International Civil Aviation Day", "National Cotton Candy Day "],
        "8" => ["National Chocolate Brownie Day"],
        "9" => ["International Anti-Corruption Day", "National Pastry Day", "Weary Willie Day"],
        "10" => ["Human Rights Day", "International Shareware Day", "Nobel Prize Day"],
        "11" => ["International Mountain Day", "UNICEF Birthday", "World Choral Day"],
        "12" => ["National Cocoa Day", "Bonza Bottler Day"],
        "13" => ["National Guard Birthday", "National Day of the Horse", "Ice Cream and Violins Day"],
        "14" => ["Monkey Day"],
        "15" => ["Bill of Rights Day", "Free Shipping Day", "International Tea Day"],
        "16" => ["National Underdog Day", "National Chocolate-Covered Anything Day"],
        "17" => ["Pan American Aviation Day", "Wright Brothers Day"],
        "18" => ["International Migrants Day", "National Roast Suckling Pig Day"],
        "19" => ["National Hard Candy Day"],
        "20" => ["International Human Solidarity Day", "Mudd Day", "World Snowboard Day"],
        "21" => ["Crossword Puzzle Day", "First Day of Winter/Winter Solstice", "Forefather's Day", "World Peace Day"],
        "22" => ["National Date Nut Bread Day", "National Haiku Poetry Day", "National Re-gifting Day"],
        "23" => ["Festivus", "Human Light Celebration", "National Pfeffernuesse Day"],
        "24" => ["Washington's Birthday"],
        "25" => ["National Pumpkin Pie Day"],
        "26" => ["Day After Christmas Day", "Boxing Day", "National Thank-You Note Day"],
        "27" => ["National Fruit Cake Day", "Visit the Zoo Day"],
        "28" => ["Holy Innocents Day", "National Chocolate Day"],
        "29" => ["National Chocolate Day", "Pepper Pot Day", "Tick Tock Day"],
        "30" => ["Bacon Day", "Falling Needles Family Fest Day", "National Bicarbonate of Soda Day (Baking Soda)"],
        "31" => ["Leap Second Time Adjustment Day", "Make Up Your Mind Day", "National Champagne Day", "Universal Hour of Peace Day", "World Peace Meditation Day"],
    ];

    public static $recurringHolidays = [
        "24" => ["Christmas Eve"],
        "25" => ["Christmas"],
        "31" => ["New Year's Eve"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date)
    {
        $events = [];
        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date)
    {
        $events = [];
        return $events;
    }
}
