<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class January extends Month {
    public static $recurringEvents = [
        "1" => ["Copyright Law Day", "Commitment Day", "Ellis Island Day", "Euro Day", "First Foot Day", "Global Family Day", "Apple Gifting Day", "National Bloody Mary Day", "Public Domain Day", "World Day of Peace"],
        "2" => ["National Buffet Day", "National Motivation and Inspiration Day", "National Personal Trainer Awareness Day", "National Science Fiction Day", "Pet Travel and Safety Day", "National Cream Puff Day"],
        "3" => ["Drinking Straw Day", "J R R Tolkien Day", "National Chocolate Covered Cherry Day", "Fruitcake Toss Day"],
        "4" => ["National Trivia Day", "Dimpled Chad Day", "Tom Thumb Day", "World Braille Day", "World Hypnotism Day"],
        "5" => ["Bird Day"],
        "6" => ["Epiphany", "Three Kings Day"],
        "7" => ["Im Not Going To Take It Anymore Day", "Harlem Globetrotters Day", "International Programmers Day", "Orthodox Christmas", "National Bobblehead Day", "National Tempura Day"],
        "8" => ["Argyle Day", "Bubble Bath Day", "Earths Rotation Day", "National English Toffee Day", "Midwifes Day", "National Show And Tell at Work Day", "War On Poverty Day"],
        "9" => ["Baloon Ascention Day", "National Cassoulet Day", "National Static Electricity Day"],
        "10" => ["League of Nations Day", "National Cut Your Energy Costs Day", "No Pants Subway Ride Day", "Stephen Foster Day"],
        "11" => ["National Hot Toddy Day", "Step in A Puddle and Splash Your Friends Day", "Cigarettes Are Hazardous To Your Health Day", "Learn Your Name in Morse Code Day", "National Human Trafficking Awareness Day"],
        "12" => ["Feast of Fabulous Wild Men Day", "National Pharmacist Day", "Kiss a Ginger Day"],
        "13" => ["Make Your Dream Come True Day", "National Sticker Day", "Public Radio Broadcasting Day", "Rubber Duckie Day", "International Skeptics Day", "National Peach Melba Day"],
        "14" => ["Caesarean Section Day", "International Kite Day", "Dress Up Your Pet Day", "Organize Your Home Day", "Ratification Day", "National Hot Pastrami Sandwich Day"],
        "15" => ["Humanitarian Day", "National Hat Day", "Strawberry Ice Cream Day"],
        "16" => ["Appreciate A Dragon Day", "Civil Service Day", "National Fig Newton Day", "National Nothing Day", "Religious Freedom Day", "Soup Swap Day", "Without A Scalpel Day", "National Hot And Spicy Food Day", "Underwater Parks Day"],
        "17" => ["Cable Car Day", "Judgment Day", "Kid Inventors Day", "National Bootleggers Day", "Popeye Day", "Ditch New Years Resolutions Day", "Ben Franklins Birthday", "Hot Buttered Rum Day", "World Snow Day"],
        "18" => ["Thesaurus Day", "National Day of Service", "National Sanctity of Human Life Day", "Winnie The Pooh Day", "Peking Duck Day"],
        "19" => ["National Popcorn Day", "Tin Can Day", "World Day of Migrants and Refugees", "Archery Day", "National Gun Appreciation Day"],
        "20" => ["Camcorder Day", "Penguin Awareness Day", "National Disc Jockey Day", "National Buttercrunch Day", "National Cheese Lovers Day", "National Coffee Break Day"],
        "21" => ["National Hugging Day", "Squirrel Appreciation Day", "Womens Healthy Weight Day"],
        "22" => ["Answer Your Cats Questions Day", "Celebration of Life Day", "Roe vs Wade Day", "Data Innovation Day", "National Blonde Brownie Day"],
        "23" => ["National Handwriting Day", "National Pie Day", "Snowplow Mailbox Hockey Day", "Measure Your Feet Day"],
        "24" => ["Belly Laugh Day", "Beer Can Appreciation Day", "National Compliment Day", "National Peanut Butter Day", "Talk Like a Grizzled Prospector Day"],
        "25" => ["Opposite Day", "National Irish Coffee Day", "A Room of Ones Own Day", "Macintosh Computer Day", "Robert Burns Day"],
        "26" => ["National Peanut Brittle Day", "Toad Hollow Day of Encouragement", "Spouses Day"],
        "27" => ["Chocolate Cake Day", "Auschwitz Liberation Day", "Holocaust Memorial Day", "International Mobile Phone Recycling Day", "National Geographic Day", "Thomas Crapper Day", "Viet Nam Peace Day", "Punch the Clock Day"],
        "28" => ["Data Privacy Day", "National Kazoo Day", "Thank A Plugin Developer Day"],
        "29" => ["Curmudgeons Day", "Freethinkers Day", "National Pre-school Fitness Day", "National Puzzle Day", "Seeing Eye Dog Day", "Thomas Paine Day", "National Cornchip Day"],
        "30" => ["Croissant Day", "Inane Answering Message Day"],
        "31" => ["Appreciate Your Social Security Check Day", "Inspire Your Heart with Art Day", "Backward Day"],
    ];

    public static $recurringHolidays = [
        "1" => ["New Year's Day"],
    ];

    public static $specificDateEvents = [
        "2016" => [
            "3" => ["Quadrantids Meteor Shower"],
            "4" => ["Quadrantids Meteor Shower"],
            "11" => ["New Moon"],
            "24" => ["FullMoon"],
        ],"2017" => [
            "20" => ["Inauguration Day"],
        ]
    ];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
        "first Monday of January %Y" => ["Thank God Its Monday Day", "Divorce Monday", "National Weigh in Day", "Blue Monday"],
        "second Monday of January %Y" => ["National Clean Off Your Desk Day"],
        "second Tuesday of January %Y" => ["Bean Day", "National Poetry at Work Day"],
        "second Thursday of January %Y" => ["Get To Know Your Customers Day"],
        "second Friday of January %Y" => ["International Fetish Day"],
        "third Sunday of January %Y" => ["World Religion Day"],
        "third Monday of January %Y" => ["Martin Luther King Jr. Birthday", "National Crowd Feed Day"],
        "fourth Saturday of January %Y" => ["Visit Your Local Quilt Shop Day"],
        "last Saturday of January %Y" => ["National Seed Swap Day"],
        "last Monday of January %Y" => ["Bubble Wrap Appreciation Day"],
        "last Friday of January %Y" => ["Fun at Work Day", "National Preschool Fitness Day"],
        "last Sunday of January %Y" => ["World Leprosy Day"],
    ];

    public static $configurationHolidays = [];

    protected function getRecurringAdvancedConfigurationBasedEvents(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }

    protected function getRecurringAdvancedConfigurationBasedHolidays(\Carbon\Carbon $date) {
        $events = [];
        return $events;
    }
}
