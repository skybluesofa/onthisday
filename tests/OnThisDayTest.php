<?php
use Skybluesofa\OnThisDay\OnThisDay;
use Carbon\Carbon;

class OnThisDayTest extends PHPUnit_Framework_TestCase {
	function test_january_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/January.php');
		$this->assertNotContains ("New Year's Day", (new OnThisDay)->getEvents('1/1/2016'));
		$this->assertContains ("New Year's Day", (new OnThisDay)->getHolidays('1/1/2016'));
		$this->assertContains ("New Year's Day", (new OnThisDay)->setLocale('en_US')->getHolidays('1/1/2016'));
	}
	function test_february_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/February.php');
		$this->assertContains ("Valentine's Day", (new OnThisDay)->getEvents('2/14/2016'));
	}
	function test_march_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/March.php');
	}
	function test_april_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/April.php');
	}
	function test_may_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/May.php');
	}
	function test_june_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/June.php');
	}
	function test_july_data() {
		$this->assertFileExists(__DIR__.'/../tests/Custom/En/Us/Month/July.php');
		$events = (new OnThisDay)->useCustomEvents("\Skybluesofa\OnThisDayTest\Custom")->getEvents('7/1/2016');
		$this->assertContains ("Some Custom Event", $events);
		$events = (new OnThisDay)->useCustomEvents("\Skybluesofa\OnThisDayTest\Custom")->withStandardEvents(false)->getEvents('7/1/2016');
		$this->assertContains ("Some Custom Event", $events);
		$this->assertNotContains ('Fourth of July', (new OnThisDay)->getEvents('7/4/2016'));
		$this->assertContains ('Fourth of July', (new OnThisDay)->getHolidays('7/4/2016'));
		$this->assertContains ('Fourth of July', (new OnThisDay)->getEventsAndHolidays('7/4/2016'));
		$this->assertContains ('Friday the 13th', (new OnThisDay)->getEvents('7/13/2018'));
		$this->assertNotContains ('Friday the 13th', (new OnThisDay)->getHolidays('7/13/2018'));
	}
	function test_august_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/August.php');
		$this->assertContains ('National Dog Day', (new OnThisDay)->getHolidays('8/26/2016'));
		$this->assertContains ('National Dog Day', (new OnThisDay)->getEventsAndHolidays('8/26/2016'));
	}
	function test_september_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/September.php');
	}
	function test_october_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/October.php');
		$this->assertNotContains ('Halloween', (new OnThisDay)->getEvents('10/31/2016'));
		$this->assertContains ('Halloween', (new OnThisDay)->getHolidays('10/31/2016'));
		$this->assertContains ('Halloween', (new OnThisDay)->getEventsAndHolidays('10/31/2016'));
	}
	function test_november_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/November.php');
		$this->assertContains ('Men Make Dinner Day', (new OnThisDay)->getEvents('11/3/2016'));
		$this->assertContains ('Take A Hike Day', (new OnThisDay)->getEvents('11/17/2016'));
		$this->assertContains ('Black Friday', (new OnThisDay)->getEvents('11/25/2016'));
		$this->assertNotContains ('Thanksgiving', (new OnThisDay)->getEvents('11/24/2016'));
		$this->assertContains ('Thanksgiving', (new OnThisDay)->getHolidays('11/24/2016'));
		$this->assertContains ('Thanksgiving', (new OnThisDay)->getEventsAndHolidays('11/24/2016'));
	}
	function test_december_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/December.php');
		$this->assertContains ('National Cookie Day', (new OnThisDay)->getEvents('12/4/2016'));
		$this->assertNotContains ('Monkey Day', (new OnThisDay)->getEvents('12/4/2016'));
		$this->assertNotContains ('Christmas', (new OnThisDay)->getEvents('12/25/2016'));
		$this->assertContains ('Christmas', (new OnThisDay)->getHolidays('12/25/2016'));
		$this->assertContains ('Christmas', (new OnThisDay)->getEventsAndHolidays('12/25/2016'));
	}
	function test_when_is_event() {
		/*
		$this->assertContainsOnlyInstancesOf(Carbon::class, (new OnThisDay)->whenIs('Halloween', '2016'));
		$this->assertContains('10/31/2016', array_map(
        function($halloweenDate) { return $halloweenDate->format('m/d/Y') },
        (new OnThisDay)->whenIs('Halloween', '2016')
		));
		$this->assertCount(1, (new OnThisDay)->whenIs('Thanksgiving', '2012'))
		$this->assertContains('11/22/2012', array_map(
        function($halloweenDate) { return $halloweenDate->format('m/d/Y') },
        (new OnThisDay)->whenIs('Thanksgiving', '2012')
		));
		$this->assertCount(0, (new OnThisDay)->whenIs('Some Made-up Holiday about Aliens', '2012'));
		*/
	}
}
?>
