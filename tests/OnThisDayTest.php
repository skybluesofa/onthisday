<?php
use Skybluesofa\OnThisDay\OnThisDay;
use Carbon\Carbon;

class OnThisDayTest extends PHPUnit_Framework_TestCase {
	function test_january_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/January.php');
		$this->assertNotContains ("New Year's Day", OnThisDay::getEvents('1/1/2016'));
		$this->assertContains ("New Year's Day", OnThisDay::getHolidays('1/1/2016'));
		$this->assertContains ("New Year's Day", OnThisDay::setLocale('en_US')->getHolidays('1/1/2016'));
	}
	function test_february_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/February.php');
		$this->assertContains ("Valentine's Day", OnThisDay::getEvents('2/14/2016'));
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
		$events = OnThisDay::useCustomEvents("Skybluesofa\OnThisDay\Tests\Custom")->getEvents('7/1/2016');
		$this->assertContains ("Some Custom Event", $events);
		$events = OnThisDay::useCustomEvents("Skybluesofa\OnThisDay\Tests\Custom")->withStandardEvents(false)->getEvents('7/1/2016');
		$this->assertContains ("Some Custom Event", $events);
	}
	function test_august_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/August.php');
	}
	function test_september_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/September.php');
	}
	function test_october_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/October.php');
		$this->assertNotContains ('Halloween', OnThisDay::getEvents('10/31/2016'));
		$this->assertContains ('Halloween', OnThisDay::getHolidays('10/31/2016'));
		$this->assertContains ('Halloween', OnThisDay::getEventsAndHolidays('10/31/2016'));
	}
	function test_november_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/November.php');
		$this->assertContains ('Men Make Dinner Day', OnThisDay::getEvents('11/3/2016'));
		$this->assertContains ('Take A Hike Day', OnThisDay::getEvents('11/17/2016'));
		$this->assertContains ('Black Friday', OnThisDay::getEvents('11/25/2016'));
		$this->assertNotContains ('Thanksgiving', OnThisDay::getEvents('11/24/2016'));
		$this->assertContains ('Thanksgiving', OnThisDay::getHolidays('11/24/2016'));
		$this->assertContains ('Thanksgiving', OnThisDay::getEventsAndHolidays('11/24/2016'));
	}
	function test_december_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Month/December.php');
		$this->assertContains ('National Cookie Day', OnThisDay::getEvents('12/4/2016'));
		$this->assertNotContains ('Monkey Day', OnThisDay::getEvents('12/4/2016'));
		$this->assertNotContains ('Christmas', OnThisDay::getEvents('12/25/2016'));
		$this->assertContains ('Christmas', OnThisDay::getHolidays('12/25/2016'));
		$this->assertContains ('Christmas', OnThisDay::getEventsAndHolidays('12/25/2016'));
	}
	function test_helper_data() {
		$this->assertFileExists(__DIR__.'/../src/Data/Region/En/Us/Helpers/Easter.php');
		$this->assertContains ('Easter', OnThisDay::getHolidays('3/27/2016'));
		$this->assertContains ('Fat Tuesday', OnThisDay::getEvents('2/8/2016'));
		$this->assertContains ('Mardi Gras', OnThisDay::getEvents('2/9/2016'));
	}
	function test_when_is_event() {
		/*
		$this->assertContainsOnlyInstancesOf(Carbon::class, OnThisDay::whenIs('Halloween', '2016'));
		$this->assertContains('10/31/2016', array_map(
        function($halloweenDate) { return $halloweenDate->format('m/d/Y') },
        OnThisDay::whenIs('Halloween', '2016')
		));
		$this->assertCount(1, OnThisDay::whenIs('Thanksgiving', '2012'))
		$this->assertContains('11/22/2012', array_map(
        function($halloweenDate) { return $halloweenDate->format('m/d/Y') },
        OnThisDay::whenIs('Thanksgiving', '2012')
		));
		$this->assertCount(0, OnThisDay::whenIs('Some Made-up Holiday about Aliens', '2012'));
		*/
	}
}
?>
