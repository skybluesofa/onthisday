<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use \Skybluesofa\OnThisDay\Data\Contract\Month;
use \Carbon\Carbon;

class June extends Month {
    public static $recurringEvents = [
        "1" => ["Hazelnut Cake Day", "Buddah Birthday", "Global Day of Parents", "Heimlich Maneuver Day", "National Go Barefoot Day", "National Olive Day", "Oscar The Grouch Day", "Say Something Nice Day", "Stand For Children Day"],
        "2" => ["Rocky Road Day", "National Bubba Day", "National Rotisserie Chicken Day"],
        "3" => ["Chocolate Macaroon Day", "National Egg Day", "Chimborazo Day", "Mike The Headless Chicken Day", "Positive Power of Humor and Creativity Days"],
        "4" => ["Mike The Headless Chicken Day", "Positive Power of Humor and Creativity Days", "Audacity To Hope Day", "International Day of Innocent Children Victims of Aggression", "Old Maids Day", "The Wicket World of Croquet Day"],
        "5" => ["Gingerbread Day", "Positive Power of Humor and Creativity Days", "Festival of Popular Delusions Day", "Hot Air Balloon Day", "National Moonshine Day", "World Environment Day", "Apple I I Day"],
        "6" => ["Applesauce Cake Day", "D Day", "Drive-in Movie Day", "National Higher Education Day", "Russian Language Day", "Yo Yo Day"],
        "7" => ["Boone Day", "VCR Day", "Chocolate Ice Cream Day"],
        "8" => ["National Caribbean American HIV/AIDS Awareness Day", "Upsy Daisy Day", "World Oceans Day"],
        "9" => ["Strawberry-Rhubarb Pie Day", "Donald Duck Day", "International Archives Day", "Toy Industry Day", "World APS Day"],
        "10" => ["Alcoholics Anonymous Day", "Ball Point Pen Day", "Iced Tea Day"],
        "11" => ["German Chocolate Cake Day", "Corn on the Cob Day", "National Cotton Candy Day", "National Making Life Beautiful Day"],
        "12" => ["Peanut Butter Cookie Day", "Crowded Nest Awareness Day", "Loving Day", "National Jerky Day", "National Peanut Butter Cookie Day", "Superman Day", "World Day Against Child Labor"],
        "13" => ["Kitchen Klutzes of America Day", "Brain Injury Awareness Day", "International Albinism Awareness Day", "Random Acts of Light", "Roller Coaster Day"],
        "14" => ["Strawberry Shortcake Day", "Family History Day", "International Bath Day", "National Bourbon Day", "Pause for the Pledge Day", "World Blood Donor Day", "National Nursing Assistants Day"],
        "15" => ["Global Wind Day", "Native American Citizenship Day", "Nature Photography Day", "National Day of Prayer for Law Enforcement Officers", "Prune Day", "World Elder Abuse Awareness Day", "Worldwide Day of Giving"],
        "16" => ["Bloomsday", "Fudge Day"],
        "17" => ["Cherry Tart Day", "Apple Strudel Day", "Eat Your Vegetables Day", "National Garbage Man Day", "World Day To Combat Desertification and Drought", "World Tesselation Day"],
        "18" => ["Autistic Pride Day", "International Sushi Day", "National Splurge Day", "Sustainable Gasteronomy Day", "Garfield the Cat Day", "Juneteenth", "National Watch Day", "World Sickle Cell Day", "International Day For The Elimination of Sexual Violence in Conflict", "World Sauntering Day"],
        "19" => ["American Eagle Day", "National Hike With A Geek Day", "World Productivity Day", "World Refugee Day"],
        "20" => ["Go Skateboarding Day", "International Day of Yoga", "National Daylight Appreciation Day", "National Day of The Gong", "National Sea Shell Day", "National Selfie Day"],
        "21" => ["Peaches and Cream Day", "World Giraffe Day", "World Handshake Day", "World Humanist Day", "World Hydrography Day", "World Music Day"],
        "22" => ["Chocolate Eclair Day", "Baby Boomer's Recognition Day", "HVAC Technicians Day", "Global Smurfs Day"],
        "23" => ["Pecan Sandies Day", "Stupid Guy Thing Day", "World Rainforest Day", "Worldwide VW Beetle Day", "International Widows' Day", "Let It Go Day", "National Hydration Day", "Pink Flamingo Day", "Public Service Day", "Runner's Selfie Day", "SAT Math Day", "Typing Day"],
        "24" => ["Pralines Day", "Celebration of the Senses", "International Fairy Day", "Stonewall National Monument Day", "World UFO Day"],
        "25" => ["Strawberry Parfait Day", "Color TV Day", "Day of The Seafarer", "Global Beatles Day", "National Catfish Day"],
        "26" => ["Harry Potter Day", "International Day Against Drug Abuse and Illicit Trafficking", "International Day in Support of Victims of Torture", "National Canoe Day", "Chocolate Pudding Day"],
        "27" => ["Decide To Be Married Day", "'Happy Birthday To You' Day", "Industrial Workers of The World Day", "National HIV Testing Day", "National Sunglasses Day", "PTSD Awareness Day", "Windjammer Days"],
        "28" => ["International Body Piercing Day"],
        "29" => ["Almond Buttercrunch Day", "World Scleroderma Day"],
        "30" => ["Asteroid Day", "California Avocado Day", "National Meteor Watch Day", "National Organization For Women Day", "Social Media Day"],
    ];

    public static $recurringHolidays = [
        "14" => ["Flag Day",],
    ];

    public static $specificDateEvents = [
        "2018" => [
            "13" => ["New Moon"],
            "21" => ["Summer Solstice", "Longest Day of the Year", "Global Orgasm Day", "Tall Girl Appreciation Day"],
            "27" => ["Full Moon"],
        ],"2019" => [
            "21" => ["Summer Solstice", "Longest Day of the Year", "Global Orgasm Day", "Tall Girl Appreciation Day"],
            "27" => ["Full Moon"],
        ],"2020" => [
            "20" => ["Summer Solstice", "Longest Day of the Year", "Global Orgasm Day", "Tall Girl Appreciation Day"],
            "27" => ["Full Moon"],
        ],"2021" => [
            "20" => ["Summer Solstice", "Longest Day of the Year", "Global Orgasm Day", "Tall Girl Appreciation Day"],
        ],"2022" => [
            "21" => ["Summer Solstice", "Longest Day of the Year", "Global Orgasm Day", "Tall Girl Appreciation Day"],
        ],"2023" => [
            "21" => ["Summer Solstice", "Longest Day of the Year", "Global Orgasm Day", "Tall Girl Appreciation Day"],
        ]
    ];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
        "first Sunday of June %Y" => ["Children's Awareness Memorial Day", "National Cancer Survivors Day"],
        "first Monday of June %Y" => ["National Thank God It's Monday Day"],
        "first Wednesday of June %Y" => ["Global Running Day", "National Tailors Day"],
        "first Friday of June %Y" => ["Hug Your Cat Day",],
        "first Saturday of June %Y" => ["Drawing Day", "Pencil Day", "National Black Bear Day", "National Bubbly Day", "National Prairie Day", "National Trails Day", "Turtle Races Day"],
        "second Sunday of June %Y" => ["Abused Women and Children's Awareness Day", "Children's Sunday", "Multicultural American Child Day", "Race Unity Day"],
        "second Tuesday of June %Y" => ["Call Your Doctor Day", "World Pet Memorial Day"],
        "second Saturday of June %Y" => ["Family Fitness and Health Day", "International Young Eagles Day", "Missing Mutts Awareness Day", "National Marina Day", "National Rose (Wine) Day", "World Bike Naked Day"],
        "third Sunday of June %Y" => ["Family Awareness Day", "Husband Caregiver Day", "Turkey Lovers Day"],
        "third Friday of June %Y" => ["National Flip Flop Day"],
        "third Saturday of June %Y" => ["Mermaid Day"],
        "third Monday of June %Y" => ["Ride To Work Day (Motorcycles)"],
        "third Thursday of June %Y" => ["Dump the Pump Day", "Recess At Work Day"],
        "fourth Sunday of June %Y" => ["America's Kids Day"],
        "fourth Tuesday of June %Y" => ["National Columnists Day"],
        "fourth Friday of June %Y" => ["National Eat At A Food Truck Day"],
        "fourth Saturday of June %Y" => ["Great American Backyard Campout"],
        "last Sunday of June %Y" => ["Descendants Day", "Log Cabin Day"],
        "last Monday of June %Y" => ["Please Take My Children To Work Day"],
        "last Wednesday of June %Y" => ["National Parchment Cooking Day"],
        "last Thursday of June %Y" => ["National Bomb Pop Day"],
        "last Friday of June %Y" => ["Drive Your Corvette to Work Day"],
        "last Saturday of June %Y" => ["National Haskap Berry Day"],
    ];

    public static $configurationHolidays = [
        "third Sunday of June %Y" => ["Father's Day"],
    ];

    public static function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];

        if ($date->day == 13 && $date->isFriday()) {
            $events[] = "Friday the 13th";
        }

        // The first Friday/Saturday of the month
        if ($date->day == date("d", strtotime("first Friday of June ".$date->year)) || $date->day == date("d", strtotime("first Friday of June ".$date->year))+1 ) {
            $events[] = "Doughnut Day";
        }

        // The first Friday, Saturday and Sunday of the month
        if ($date->day == date("d", strtotime("first Friday of June ".$date->year)) || $date->day == date("d", strtotime("first Friday of June ".$date->year))+1  || $date->day == date("d", strtotime("first Friday of June ".$date->year))+2 ) {
            $events[] = "Horseradish Days";
        }

        // On the 2nd, unless that's a weekend, then it's the closest weekday
        if (($date->day==1 && $date->isFriday())
            || $date->day==2 && in_array($date->englishDayOfWeek, ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"])
            || ($date->day==3 && $date->isMonday())
            ) {
            $events[] = "National Leave the Office Early Day";
        }

        // The Saturday closest to the 15th
        if (in_array($date->day, [12, 13, 14, 15, 16, 17, 18]) && $date->isSaturday()) {
            $events[] = "World Juggling Day";
        }

        // The Friday before Father's Day
        if ($date->day == date("d", strtotime("third Sunday of June ".$date->year))-2 ) {
            $events[] = "Work at Home Father's Day";
        }

        // The Friday after Father's Day
        if ($date->day == date("d", strtotime("third Sunday of June ".$date->year))+5 ) {
            $events[] = "Take Your Dog To Work Day";
        }

        return $events;
    }

    public static function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
