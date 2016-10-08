<?php
namespace Skybluesofa\OnThisDay\Data\Month\En\Us;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class November extends Month {
    public static $recurringEvents = [
        "1" => ["Auhtors' Day", "Go Cook For Your Pet Day", "World Vegan Day", "Extra Mile Day"],
        "2" => ["Deviled Egg Day"],
        "3" => ["Housewife's Day", "Cliché Day", "Jellyfish Day", "Sandwich Day"],
        "4" => ["Use Your Common Sense Day"],
        "5" => ["Gunpowder Day"],
        "6" => ["Saxophone Day", "Nachos Day"],
        "7" => ["Hug A Bear Day", "Bittersweet Chocolate With Almonds Day"],
        "8" => ["X-Ray Day", "Cook Something Bold and Pungent Day"],
        "9" => ["World Freedom Day", "Chaos Never Dies Day"],
        "10" => ["Area Code Day", "Sesame Street Day"],
        "11" => ["Origami Day", "Veterans Day"],
        "12" => ["Fancy Rat & Mouse Day", "World Quality Day", "Pizza With The Works Except Anchovies Day"],
        "13" => ["World Kindness Day"],
        "14" => ["World Diabetes Day", "Pickle Day", "Spicy Guacamole Day", "Loosen Up, Lighten Up Day", "Operating Room Nurse Day"],
        "15" => ["I Love to Write Day", "Clean Out Your Refrigerator Day", "Philanthropy Day"],
        "16" => ["Button Day", "Have a Party with Your Bear Day", "Fast Food Day"],
        "17" => ["Unfriend Day", "World Prematurity Day", "Use Less Stuff Day", "Take A Hike Day", "Homemade Bread Day", "Petroleum Day"],
        "18" => ["Mickey Mouse Day", "Occult Day", "GIS Day"],
        "19" => ["Have A Bad Day Day", "World Toilet Day", "International Men's Day"],
        "20" => ["Universal Children's Day", "African Industrialization Day", "Peanut Butter Fudge Day", "Name Your PC Day"],
        "21" => ["World Television Day", "World Hello Day"],
        "22" => ["Go For A Ride Day"],
        "23" => ["Fibonacci Day"],
        "24" => ["Celebrate Your Unique Talent Day"],
        "25" => ["Shopping Reminder Day", "Parfait Day"],
        "26" => ["Cake Day"],
        "27" => ["Pins And Needles Day"],
        "28" => ["French Toast Day"],
        "29" => ["Electronic Greetings Day", "Square Dancing Day"],
        "30" => ["Stay Home Because You're Well Day", "Computer Security Day"],
    ];

    public static $recurringHolidays = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
        "First Monday of November %y" => ["Job Action Day", "Traffic Directors Day"],
        "First Wednesday of November %y" => ["Stress Awareness Day"],
        "First Thursday of November %y" => ["Men Make Dinner Day"],
        "First Friday of November %y" => ["Love Your Lawyer Day"],
        "First Sunday of November %y" => ["Orphan Sunday", "Zero Tasking Day"],
        "Second Monday of November %y" => ["World Orphans Day"],
        "Second Sunday of November %y" => ["International Tongue Twister Day"],
        "Third Tuesday of November %y" => ["Entrepreneurs' Day"],
        "Third Thursday of November %y" => ["Beaujolais Nouveau Day"],
        "Third Sunday of November %y" => ["Guinness World Record Day"],
        "Fourth Friday of November %y" => ["Flossing Day"],
        "Fourth Sunday of November %y" => ["International Aura Awareness Day"],
        "Last Friday of November %y" => ["Systems Engineer Day"],
    ];

    public static $configurationHolidays = [
        "Fourth Thursday of November %y" => ["Thanksgiving"],
    ];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];

        $thanksgiving = new \Carbon\Carbon('Fourth Thursday of November ' . $date->year);

        if ($date->toDateString == $thanksgiving->copy()->addDay()->toDateString) {
            $events[] = "Maize Day";
        }

        if ($date->toDateString == $thanksgiving->copy()->next(\Carbon\Carbon::FRIDAY)->toDateString) {
            $events[] = "Black Friday";
            $events[] = "Buy Nothing Day";
        }

        if ($date->toDateString == $thanksgiving->copy()->next(\Carbon\Carbon::SATURDAY)->toDateString) {
            $events[] = "Small Business Saturday";
        }

        if ($date->toDateString == $thanksgiving->copy()->next(\Carbon\Carbon::MONDAY)->toDateString) {
            $events[] = "Cyber Monday";
        }

        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
