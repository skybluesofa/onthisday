<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class February extends Month {
    public static $recurringEvents = [
        "1" => array("Car Insurance Day", "Change Your Password Day", "Decorating With Candy Day", "G I Joe Day", "International Face And Body Art Day", "Freedom Day", "Robinson Crusoe Day", "Serpent Day", "Spunky Old Broads Day"),
        "2" => array("Groundhog Day", "Ayn Rand Day", "Candelmas", "Crepe Day", "Hedgehog Day", "Imbolc", "Marmot Day", "Sled Dog Day", "World Play Your Ukulele Day", "World Wetlands Day"),
        "3" => array("The Day The Music Died", "National Girls And Women in Sports Day", "Four Chaplains Memorial Day"),
        "4" => array("Create a Vacuum Day", "Thank a Mailman Day", "Facebooks Birthday", "Liberace Day", "Medjoola Date Day", "Quacker Day", "U S O Day", "World Cancer Day"),
        "5" => array("Adlai Stevenson Day", "Shower With A Friend Day", "Weathermans Day", "Western Monarch Day", "World Nutella Day", "National Doodle Day"),
        "6" => array("Lame Duck Day", "Girl Scout Cookie Day", "Canadian Maple Syrup Day"),
        "7" => array("E Day", "Ballet Day", "Black Hiv Aids Awareness Day", "International Day of Black Women in The Arts", "National Periodic Table Day", "Wave All Your Fingers At Your Neighbors Day"),
        "8" => array("Boy Scout Day", "Laugh and Get Rich Day", "Losar", "Opera Day", "Kite Flying Day"),
        "9" => array("National Stop Bullying Day", "National Pizza Day", "Read in the Bathtub Day", "Toothache Day"),
        "10" => array("Plimsoll Day", "All The News Thats Fit To Print Day", "Umbrella Day"),
        "11" => array("Be Electrific Day", "Dont Cry Over Spilled Milk Day", "Get Out Your Guitar Day", "Make A Friends Day", "Pro Sports Wives Day", "National Shut In Visitation Day", "Satisfied Staying Single Day", "White Shirt Day", "White T Shirt Day", "World Day of The Sick", "National Inventors Day"),
        "12" => array("Darwin Day", "Lincolns Birthday", "N A A C P Day", "Oglethorpe Day", "Paul Bunyan Day", "Safety Pup Day", "Plum Pudding Day"),
        "13" => array("Desperation Day", "Employee Legal Awareness Day", "Get a Different Name Day", "International Condom Day", "Madly In Love With Me Day", "World Radio Day"),
        "14" => array("Valentine's Day", "Batman Sticker Day", "Ferris Wheel Day", "International Book Giving Day", "Frederick Douglass Day", "Pet Theft Awareness Day", "Library Lovers Day", "National Have A Heart Day", "National Condom Day", "Congenital Heart Defect Awareness Day", "League of Women Voters Day", "National Womens Heart Day", "Race Relations Day", "National Donor Day", "Quirky Alone Day"),
        "15" => array("Angelman Syndrome Day", "Lupercalia", "National Gum Drop Day", "National Hippo Day", "Remember The Maine Day", "Susan B Anthony Day", "Singles Awareness Day", "Singles Appreciation Day"),
        "16" => array("National Almond Day", "Kyoto Protocol Day", "Do a Grouch a Favor Day"),
        "17" => array("World Human Spirit Day", "National P T A Founders Day", "My Way Day", "Champion Crab Races Day"),
        "18" => array("Eat Ice Cream for Breakfast Day", "National Drink Wine Day", "National Hate Florida Day", "Pluto  Day", "Battery Day"),
        "19" => array("Best Friends Day", "Chocolate Mint Day", "National Lashes Day", "Women in Blue Jeans Days", "Iwo Jima Day"),
        "20" => array("Women in Blue Jeans Days", "Love Your Pet Day", "Northern Hemisphere Hoodie Hoo Day", "World Day for Social Justice", "Cherry Pie Day"),
        "21" => array("International Mother Language Day", "Card Reading Day"),
        "22" => array("National Margarita Day", "Woolworths Day", "World Thinking Day", "George Washingtons Birthday", "Tex Avery Day", "Be Humble Day", "Walking the Dog Day"),
        "23" => array("International Dog Biscuit Appreciation Day", "Tennis Day", "Diesel Engine Day", "Curling is Cool Day", "Single Tasking Day"),
        "24" => array("National Tortilla Chip Day", "World Bartender Day"),
        "25" => array("Pistol Patent Day"),
        "26" => array("Carnival Day", "National Pistachio Day", "Tell a Fairy Tale Day", "National Personal Chefs Day", "For Petes Sake Day", "Levi Strauss Day", "National Bacon Day"),
        "27" => array("Polar Bear Day", "No Brainer Day", "Anosomia Awareness Day", "National Day of Action"),
        "28" => array("Floral Design Day", "Public Sleeping Day", "National Tooth Fairy Day"),
        "29" => array("Leap Day", "Bachelors Day", "International Underlings Day", "Rare Disease Day"),
    ];

    public static $specificDateEvents = [
        "2016" => [
            "8" => ["Super Bowl Sunday", "New Moon", "Chinese New Year"],
            "22" => ["Full Moon"],
        ]
    ];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
        "first Tuesday of February %y" => ["AfricanAmericanCoachesDay"],
        "first Wednesday of February %y" => ["NationalSigningDay"],
        "first Friday of February %y" => ["BubbleGumDay", "GiveKidsASmileDay", "WearRedDay", "WorkingNakedDay"],
        "first Saturday of February %y" => ["IceCreamForBreakfastDay", "TakeYourChildToTheLibraryDay"],
        "second Sundays of February %y" => ["AutismSunday", "WorldMarriageDay"],
        "second Mondays of February %y" => ["CleanOutYourComputerDay"],
        "second Tuesdays of February %y" => ["SaferInternetDay", "ExtraterrestrialVisitorDay", "ExtraterrestrialCultureDay"],
        "third Saturdays of February %y" => ["WorldWhaleDay"],
        "third Fridays of February %y" => ["WorldInformationArchitectureDay"],
        "fourth Wednesday of February %y" => ["InconvenienceYourselfDay"],
        "last Tuesday of February %y" => ["SpayDayUSA"],
        "last Thursday of February %y" => ["NationalChiliDay"],
        "last Saturday of February %y" => ["InternationalSwordSwallowersDay"],

    ];

    public static $configurationHolidays = [];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];
        if ($date->toDateString() == date("Y-m-d", strtotime("last sunday", strtotime("2/14/".$date->year)))) {
            $events[] = "Man Day"; // Sunday before Valentine"s Day
        }
        if (($date->toDateString() == date("Y-m-d", strtotime("last monday of February ".$date->year)))
                || ($date->toDateString() == date("Y-m-d", strtotime("last tuesday of February ".$date->year)))) {
            $events[] = "MuseumAdvocacyDay";
        }
        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
