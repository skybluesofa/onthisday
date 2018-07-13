<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use \Skybluesofa\OnThisDay\Data\Contract\Month;
use \Carbon\Carbon;

class July extends Month {
    public static $recurringEvents = [
        "1" => ["Canada Day", "National GSA Employee Day", "National Postal Workers Day", "U.S. Postage Stamp Day", "Zip Code Day", "Resolution Renewal Day", "Creative Ice Cream Flavors Day", "International Joke Day", "International Reggae Day", "Gingersnap Day"],
        "2" => ["I Forgot Day", "Made in the U.S.A. Day", "World UFO Day", "Anisette Day",],
        "3" => ["Compliment Your Mirror Day", "International Plastic Bag Free Day", "Superman Day", "Stay out of the Sun Day", "Chocolate Wafer Day", "Eat Beans Day", "Disobedience Day"],
        "4" => ["Boom Box Parade Day", "Indivisible Day", "Independence from Meat Day", "National Country Music Day", "Barbeque Day", "Spareribs Day", "Caesar Salad Day", "Jackfruit Day"],
        "5" => ["Bikini Day", "Work Without Your Hands Day", "Apple Turnover Day"],
        "6" => ["Fried Chicken Day", "International Kissing Day", "Take Your Webmaster to Lunch Day", "Beer Pong Day", "Virtually Hug a Virtual Assistant Day"],
        "7" => ["Chocolate Day", "Father-Daughter Take a Walk Together Day", "Strawberry Sundae Day", "Macaroni Day", "Global Forgiveness Day", "Tell the Truth Day"],
        "8" => ["Coca-Cola Day", "National Blueberry Day", "Chocolate with Almonds Day"],
        "9" => ["Body Painting Day", "National No Bra Day", "National Sugar Cookie Day", "International Town Criers Day", "Wienerschnitzel Day"],
        "10" => ["Don't Step on a Bee Day", "Pina Colada Day", "Teddy Bear Picnic Day", "U.S. Energy Independence Day", "Cow Appreciation Day"],
        "11" => ["Bowdlers Day", "Cheer Up the Lonely Day", "Day of the Five Billion", "National Rainier Cherries Day", "Slurpee Day", "7 Eleven Day", "World Population Day", "Blueberry Muffin Day", "All American Pet Photo Day"],
        "12" => ["Simplicity Day", "Different Colored Eyes Day", "Pecan Pie Day", "Etch-a-Sketch Day", "New Conversations Day"],
        "13" => ["Kebab Day", "Embrace Your Geekness Day", "Gruntled Workers Day", "National Beef Tallow Day", "National French Fry Day", "World Cup Soccer Day", "Barbershop Music Appreication Day", "International Rock Day"],
        "14" => ["Bastille Day", "International Nude Day", "National Macaroni and Cheese Day", "Shark Awareness Day", "Pandemonium Day", "Grand Marnier Day"],
        "15" => ["Be a Dork Day", "Gummi Worm Day", "National Give Something Away Day", "National Pet Fire Safety Day", "Saint Swithin's Day", "Tapioca Pudding Day", "Orange Chicken Day"],
        "16" => ["Hot Dog Night", "World Snake Day", "Guinea Pig Appreciation Day", "Corn Fritters Day", "Fresh Spinach Day"],
        "17" => ["Disneyland Day", "World Emoji Day", "Wrong Way Corrigan Day", "Yellow Pig Day", "Peach Ice Cream Day", "Tattoo Day"],
        "18" => ["National Caviar Day", "Nelson Mandela International Day", "National Sour Candy Day", "Hot Dog Day", "Mandela Day"],
        "19" => ["Get to Know Your Customers Day", "National Daiquiri Day", "Ice Cream Day"],
        "20" => ["International Cake Day", "Moon Day", "Space Exploration Day", "National Lollipop Day", "World Jump Day", "International Chess Day"],
        "21" => ["Legal Drinking Age Day", "No Pet Store Puppies Day", "Junk Food Day", "Lamington Day"],
        "22" => ["Casual Pi Day", "Fragile X Awareness Day", "National Penuche Fudge Day", "Rat-catchers Day", "Spooners Day", "Hammock Day", "Penuche Fudge Day", "Mango Day", "Creme Brulee Day"],
        "23" => ["Gorgeous Grandma Day", "Hot Enough For Ya Day", "National Hot Dog Day", "Peanut Butter and Chocolate Day", "International Yada, Yada, Yada Day"],
        "24" => ["Cousins Day", "National Drive-thru Day", "National Tequila Day", "National Thermal Engineers Day", "Tell An Old Joke Day", "Amelia Earhart Day"],
        "25" => ["Merry Go Round Day", "Red Shoe Day", "Thread the Needle Day", "Hot Fudge Sundae Day", "Carousel Day"],
        "26" => ["One Voice", "All or Nothing Day", "Aunt and Uncle Day", "Coffee Milkshake Day"],
        "27" => ["Scotch Whisky Day", "Take Your Houseplant for a Walk Day", "Take Your Pants for a Walk Day", "Barbie in a Blender Day", "National Korean War Veterans Armistice Day", "Walk on Stilts Day", "Talk in an Elevator Day", "Gary Gygax Day"],
        "28" => ["National Milk Chocolate Day", "Buffalo Soldiers Day", "National Waterpark Day", "World Hepatitis Day"],
        "29" => ["Lasagna Day", "Army Chaplain Corps Anniversary", "National Chicken Wing Day", "International Tiger Day", "National Lipstick Day", "Rain Day"],
        "30" => ["Cheesecake Day", "Father-In-Law Day", "Friendship Day", "Medicare's Birthday", "International Day of Friendship", "National Whistleblowers Appreciation Day", "National Support Public Education Day", "Paperback Book Day", "World Day Against Trafficking in Persons"],
        "31" => ["Uncommon Instrument Awareness Day", "World Ranger Day", "National Avocado Day", "National Mutt Day", "Raspberry Cake Day"],
    ];

    public static $recurringHolidays = [
        "4" => ["Fourth of July",]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
        "first Saturday of July %Y" => ["Hop a Park Day", "International Day of Cooperatives", "National Cherry Pit Spitting Day",],
        "first Sunday of July %Y" => ["Build A Scarecrow Day"],
        "second Monday of July %Y" => ["International Town Criers Day"],
        "second Tuesday of July %Y" => ["Chick-fil-A's Cow Appreciation Day"],
        "second Friday of July %Y" => ["Collector Car Appreciation Day", "National Motorcycle Day"],
        "second Saturday of July %Y" => ["Bald Is In", "Carver Day", "Grange Day"],
        "third Sunday of July %Y" => ["Lake Superior Day", "National Ice Cream Day"],
        "third Monday of July %Y" => ["Global Hug Your Kid Day", "National Get Out of the Doghouse Day"],
        "third Wednesday of July %Y" => ["National Hot Dog Day", "Take Your Poet To Work Day"],
        "third Saturday of July %Y" => ["Strawberry Rhubarb Wine Day", "Toss Away the 'Could Haves' and 'Should Haves' Day", "Woodie Wagon Day"],
        "fourth Sunday of July %Y" => ["Aunties Day", "Parents Day"],
        "fourth Thursday of July %Y" => ["National Intern Day", "National Refreshment Day"],
        "fourth Saturday of July %Y" => ["National Day of the Cowboy"],
        "last Thursday of July %Y" => ["National Chili Dog Day"],
        "last Friday of July %Y" => ["National Get Narly Day", "National Talk in An Elevator Day", "System Administrator Appreciation Day"],
        "last Saturday of July %Y" => ["National Dance Day"],
    ];

    public static $configurationHolidays = [];

    public static function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];

        if ($date->day == 13 && $date->isFriday()) {
            $events[] = "Friday the 13th";
        }

        // Leap Years on the 1st or Other Years on the 2nd
        if ((self::isLeapYear($date->year) && ($date->day==1)) || (!self::isLeapYear($date->year) && ($date->day==2))) {
            $events[] = "Second Half of the Year Day";
        }

        // The Friday of the last full weekend in July
        if ($date->day == (new Carbon("last Sunday of July ".$date->year))->subDays(9)->day) {
            $events[] = "National Lumberjack Day";
        }
        return $events;
    }

    public static function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
