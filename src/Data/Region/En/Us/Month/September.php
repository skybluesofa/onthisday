<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use \Skybluesofa\OnThisDay\Data\Contract\Month;
use \Carbon\Carbon;

class September extends Month {
    public static $recurringEvents = [
        "1" => ["Girlfriend's Day", "International Can-It-Forward Day", "National Minority Donor Awareness Day", "Respect For Parents", "Rounds Resounding Day", "Spider-Man Day", "US Air Force Day", "World Lung Cancer Day", "World Wide Web Day", "World Scout Scarf Day"],
        "2" => ["Ecological Debt Day", "National Coloring Book Day", "Take A Penny/Leave A Penny Day"],
        "3" => ["Friendship Day", "Watermelon Day", "Welsh Rarebit Day"],
        "4" => ["Coast Guard Day", "National Chocolate Chip Day", "Single Working Women's Day", "Social Security Day"],
        "5" => ["National Oyster Day", "National Underwear Day", "Cheese Pizza Day"],
        "6" => ["Hiroshima Day", "National Fresh Breath Day", "National Root Beer Float Day"],
        "7" => ["Lighthouse Day", "Particularly Preposterous Packaging Day", "Professional Speakers Day", "Purple Heart Day"],
        "8" => ["Date-Nut Bread Day", "Bullet Journal Day", "International Cat Day", "The Date to Create", "Happiness Happens Day", "Odie Day", "Sneak Some Zucchini Onto Your Neighbor's Porch Night", "Wear Your Mother's Jewelry Day"],
        "9" => ["International Day of The World's Indigenous People", "Veep Day"],
        "10" => ["National Duran Duran Appreciation Day", "National Shapewear Day", "Paul Bunyan Day", "Skyscraper Appreciation Day", "Smithsonian Day", "S'mores Day", "World Lion Day"],
        "11" => ["Ingersoll Day", "Presidential Joke Day", "Hot Cross Bun Day"],
        "12" => ["IBM PC Day", "International Youth Day", "Milkman Day", "Sewing Machine Day", "Vinyl Record Day", "Chocolate Milkshake Day"],
        "13" => ["International Lefthander's Day"],
        "14" => ["International Rose' Day", "National Navajo Code Talkers Day", "Spirit of '45 Day", "V-J Day", "Cream-Filled Donut Day"],
        "15" => ["Best Friends Day", "Chauvin Day", "Check The Chip Day", "National Relaxation Day", "National No SpongeBob Day", "Creme de Menthe Day"],
        "16" => ["Joe Miller's Joke Day", "National Airborne Day", "National Rollercoaster Day", "Wave at Surveilance Day", "Cinnamon-Raisin Bread Day"],
        "17" => ["Apple Dumpling Day", "Black Cat Appreciation Day", "I Love My Feet Day", "Meaning of 'Is' Day", "National Nonprofit Day", "National Thrift Shop Day"],
        "18" => ["Play-Dough Day", "Bad Poetry Day", "Birth Control Pills Day", "Mail Order Catalog Day", "National Badge Ribbon Day", "National Fajita Day", "Serendipity Day"],
        "19" => ["Butterscotch Pudding Day", "Aviation Day", "'Black Cow' Root Beer Float Day", "Coco Chanel Day", "International Orangutan Day", "World Photo Day"],
        "20" => ["Punch Day", "National Radio Day", "World Mosquito Day"],
        "21" => ["Pecan Cookie Day", "Brazilian Blow-out Day", "Internet Self-care Day", "National Spumoni Day", "Poet's Day", "Senior Citizen's Day"],
        "22" => ["White Chocolate Day", "Be An Angel Day", "National Bao Day", "Southern Hemisphere Hoodie Hoo Day", "Take Your Cat To The Vet Day"],
        "23" => ["Day For The Remembrance of The Slave Trade and Its Abolition", "Valentino Day"],
        "24" => ["Knife Day", "Pluto Demoted Day", "Vesuvius Day", "Wayzgoose Day", "William Wilberforce Day", "National Waffle Iron Day"],
        "25" => ["Cooking Day", "Kiss and Make Up Day", "National Park Service Day", "National Second-hand Wardrobe Day"],
        "26" => ["Pancake Day", "National Dog Day", "National Toilet Paper Day", "National WebMistress Day", "Women's Equality Day"],
        "27" => ["Just Because Day", "The Duchess Who Wasn't Day"],
        "28" => ["Strawberry Cream Pie Day", "Race Your Mouse Around the Icons Day", "Radio Commercials Day", "Crackers Over The Keyboard Day"],
        "29" => ["Coffee Day", "According to Hoyle Day", "Individual Rights Day", "International Day Against Nuclear Tests", "More Herbs, Less Salt Day", "National Sarcoidosis Day", "National Whiskey Sour Day"],
        "30" => ["Mulled Cider Day", "International Cabernet Sauvignon Day", "International Day of The Victims of Enforced Disappearances", "International Whale Shark Day", "National Grief Awareness Day", "National Holistic Pet Day", "National Toasted Marshmallow Day"],
        "31" => ["International Overdose Awareness Day", "Love Litigating Lawyers Day", "National Diatomaceous Earth Day", "National Matchmaker Day"],
    ];

    public static $recurringHolidays = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
        "first Sunday of August %Y" => ["American Family Day", "Friendship Day", "National Doll Day", "National Kids' Day", "Sister's Day"],
        "first Tuesday of August %Y" => ["National Night Out",],
        "first Thursday of August %Y" => ["India Pale Ale Beer Day",],
        "first Friday of August %Y" => ["Homemade Pie Day", "International Beer Day", "Tomboy Tools Day"],
        "first Saturday of August %Y" => ["Mead Day", "National Disc Golf Day", "National Jamaican Patty Day", "National Mustard Day", "Sandcastle Day"],
        "second Friday of August %Y" => ["Shop Online For Groceries Day", "Worldwide Art Day"],
        "second Saturday of August %Y" => ["Middle Child Day", "National Bowling Day", "National Garage Sale Day"],
        "third Monday of August %Y" => ["Cupcake Day"],
        "third Wednesday of August %Y" => ["National Medical Dosimetrist Day"],
        "third Friday of August %Y" => ["Men's Grooming Day"],
        "third Saturday of August %Y" => ["International Geocaching Day", "Clear The Shelters Day", "International Homeless Animals Day", "World Honey Bee Day", "International Geocaching Day"],
        "last Sunday of August %Y" => ["Pony Express Day"],
        "last Wednesday of August %Y" => ["Pony Express Day"],
        "last Friday of August %Y" => ["World Daffodil Day"],
        "last Saturday of August %Y" => ["Tug-of-War Day"],
    ];

    public static $configurationHolidays = [
      "first Monday of September %Y" => ["Labor Day"]
    ];

    public static function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];

        if ($date->day == 13 && $date->isFriday()) {
            $events[] = "Friday the 13th";
        }

        $laborDay = new Carbon("first Monday of September ".$date->year);
        // The Saturday before Labor Day
        if ($date->day == $laborDay->copy()->subDays(2)->day) {
            $events[] = "Bacon Day";
            $events[] = "Franchise Appreciation Day";
        }

        // The Saturday and Sunday before Labor Day
        if ($date->day == $laborDay->copy()->subDays(2)->day
            || $date->day == $laborDay->copy()->subDays(1)->day) {
            $events[] = "Cow Chip Throwing Days";
        }

        // The Saturday and Sunday before Labor Day and Labor Day
        if ($date->day == $laborDay->copy()->subDays(2)->day
            || $date->day == $laborDay->copy()->subDays(1)->day
            || $date->day == $laborDay->day) {
            $events[] = "National Buffalo Chicken Wings Days";
        }

        // On Labor Day
        if ($date->day == $laborDay->day) {
            $events[] = "Great Bathtub Race";
        }

        // The Tuesday after Labor Day
        if ($date->day == $laborDay->copy()->addDay()->day) {
            $events[] = "Another Look Unlimited Day";
        }

        // The 256th day of the year
        if ($date->dayOfYear == 256) {
            $events[] = "National Programmers Day";
        }

        // The last school day of the month
        if (($date->day==28 && $date->isFriday()) || ($date->day==29 && $date->isFriday()) || ($date->day==30 && $date->isMonday())) {
            $events[] = "Ask A Stupid Question Day";
        }

        return $events;
    }

    public static function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];

        // Labor Day
        if ($date->day == $laborDay->day) {
            $events[] = "Labor Day";
        }

        return $events;
    }
}
