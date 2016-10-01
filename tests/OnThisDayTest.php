<?php
use Skybluesofa\OnThisDay\OnThisDay;

class OnThisDayTest extends PHPUnit_Framework_TestCase {
	function test_january_object() {
		$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/January.php');
		$this->assertContains ("New Year's Day", OnThisDay::getEvents('1/1/2016'));
	}
	function test_february_object() {
		$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/February.php');
		$this->assertContains ("Valentine's Day", OnThisDay::getEvents('2/14/2016'));
	}
	function test_march_object() {
		//$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/March.php');
		//$this->assertContains ("Valentine's Day", OnThisDay::getEvents('2/14/2016'));
	}
	function test_april_object() {
		//$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/April.php');
		//$this->assertContains ("Valentine's Day", OnThisDay::getEvents('2/14/2016'));
	}
	function test_october_object () {
		$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/October.php');
		$this->assertContains ('Halloween', OnThisDay::getEvents('10/31/2016'));
	}
	function test_december_object () {
		//$this->assertFileExists(__DIR__.'/../src/Data/Month/En/Us/December.php');
		//$this->assertContains ("New Year's Eve", OnThisDay::getEvents('12/31/2016'));
	}
}
?>
