<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Carbon\Carbon;

class October extends Month {
    public static $recurringEvents = [
        "1" => ["Vegetarian Day", "Homemade Cookies Day", "CD Player Day", "Fire Pup Day", "International Day of Older Persons", "International Music Day", "Model T Day", "National Lace Day", "National Book It Day", "National Walk Your Dog Day", "Vegan Baking Day", "World Vegetarian Day"],
        "2" => ["Name Your Car Day", "Guardian Angels Day", "International Day of Non Violence", "Islamic New Year", "National Custodial Workers Day", "World Farm Animals Day"],
        "3" => [],
        "4" => ["Blessing of The Animals Day", "Improve Your Office Day", "Kanelbullens Dag", "National Taco Day", "National Ship in A Bottle Day", "Ten-Four Day", "World Animal Day", "Vodka Day"],
        "5" => ["International Day of No Prostitution", "World Teachers Day"],
        "6" => ["American Libraries Day", "Ecological Debt Day", "Mad Hatter Day", "National German-American Day"],
        "7" => ["National Personal Safety Day", "You Matter To Me Day"],
        "8" => ["Fluffernutter Day", "Pierogy Day", "touchTag Day"],
        "9" => ["Fire Prevention Day", "Moldy Cheese Day"],
        "10" => ["Angel Food Cake Day"],
        "11" => ["Sausage Pizza Day"],
        "12" => ["Free Thought Day", "Farmers Day", "Gumbo Day", "Cheese Curd Day"],
        "13" => ["Train Your Brain Day"],
        "14" => ["Dessert Day", "Be Bald and Be Free Day"],
        "15" => ["I Love Lucy Day", "Grouch Day"],
        "16" => ["Bosses Day", "Dictionary Day", "Ferrel Cat Day"],
        "17" => ["Wear Someting Gaudy Day", "Mulligan Day", "Pasta Day", "Black Poetry Day"],
        "18" => ["No Beard Day", "Chocolate Cupcake Day"],
        "19" => ["Evaluate Your Life Day"],
        "21" => ["Pumpkin Cheesecake Day"],
        "22" => ["Nut Day", "Color Day"],
        "23" => ["Boston Cream Pie Day", "iPod Day"],
        "24" => ["Bologna Day", "U.N. Day", "Food Day"],
        "25" => ["Punk For A Day Day", "Greasy Food Day", "Bandana Day", "Sourest Day", "Artist Day", "Cartoonists Against Crime Day", "Pizza Maker's Day"],
        "26" => ["Pumkin Day", "Mincemeat Day"],
        "27" => ["Navy Day", "American Beer Day", "Cranky Co-workers Day"],
        "28" => ["Chocolate Day"],
        "29" => ["Hermit Day", "Oatmeal Day", "Cat Day"],
        "30" => ["Candy Corn Day"],
        "31" => ["Carve a Pumpkin Day", "Magic Day", "Caramel Apple Day", "Knock Knock Joke Day"],
    ];

    public static $recurringHolidays = [
        "31" => ["Halloween"],
    ];

    public static $specificDateEvents = [
        "2016" => [
            "1" => ["New Moon"],
            "7" => ["Draconis Meteor Shower"],
            "16" => ["Full Moon", "Super Moon"],
            "21" => ["Orionids Meteor Shower"],
            "22" => ["Orionids Meteor Shower"],
            "28" => ["Conjunction of Venus, Mars and Jupiter"],
            "30" => ["New Moon"],
        ]
    ];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
        "First Sunday of October %y" => ["Change A Light Day", "Country Inn Bed And Breakfast Day", "Intergeneration Day", "International African Diaspora Day", "World Communion Day"],
        "First Monday of October %y" => ["Child Health Day", "Day of Unity", "Techies Day", "World Day of Architecture", "World Day of Bullying Prevention", "World Habitat Day"],
        "First Wednesday of October %y" => ["Balloons Around The World Day", "National Kale Day", "Pet Obesity Awareness Day", "Walk To School Day"],
        "First Friday of October %y" => ["Lee's National Denim Day", "National Diversity Day", "World Smile Day"],
        "First Saturday of October %y" => ["Cephalopod Awareness Day", "Inter American Water Day", "Frugal Fun Day", "World Card Making Day"],
        "second Monday of October %y" => ["Native American Day", "Kick Butt Day"],
        "second Thursday of October %y" => ["National Depression Screening Day"],
        "second Wednesday of October %y" => ["Emergency Nurses Day", "Stop Bullying Day"],
        "second Friday of October %y" => ["World Egg Day"],
        "second Saturday of October %y" => ["Chess Day", "Costume Swap Day", "Motorcycle Ride Day"],
        "second Sunday of October %y" => ["Pastor Appreciation Day"],
        "third Thursday of October %y" => ["Get to Know Your Customers Day"],
        "third Friday of October %y" => ["Mammography Day"],
        "third Saturday of October %y" => ["Sweetest Day"],
        "Fourth Saturday of October %y" => ["Make A Difference Day"],
        "Fourth Sunday of October %y" => ["Mother-in-Law Day"],
        "Fourth Wednesday of October %y" => ["Lung Health Day"],
    ];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
