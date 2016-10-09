<?php
namespace Skybluesofa\OnThisDay;

use Carbon\Carbon;
use Skybluesofa\OnThisDay\Data\Parser;
use Skybluesofa\Chainable\Traits\Chainable;

/*
The easiest implementation is to call
# OnThisDay::getEvents('1/1/2016');


You can add 'custom' results by chaining like this:
# OnThisDay::useCustomEvents('\\Namespace\\To\\Custom\\Events')->getEvents('1/1/2016');

From there, duplicate the Skybluesofa\OnThisDay\P


You can remove 'custom' results by chaining like this:
# OnThisDay::useCustomEvents()->getEvents('1/1/2016');


You can remove 'standard' results by chaining like this:
# OnThisDay::withStandardEvents(false)->getEvents('1/1/2016');


You can also re-add 'standard' results by chaining like this:
# OnThisDay::withStandardEvents()->getEvents('1/1/2016');
*/
class OnThisDay {
    use Chainable;
  private static $date = null;
  private $locale = 'en_US';
  private $customBaseClass = false;
  private $useStandardEvents = true;

  private function setLocale($locale) {
    $this->locale = $locale;
    return $this;
  }

  private function useCustomEvents($customBaseClass=false) {
    $this->customBaseClass = $customBaseClass;
    return $this;
  }

  private function withStandardEvents($useStandardEvents=true) {
    $this->useStandardEvents = $useStandardEvents;
    return $this;
  }

  private function getEvents($date=null) {
    $parser = new Parser($this->locale);
    return $parser
      ->setDate($date ? Carbon::parse($date) : Carbon::now())
      ->setCustomBaseClass($this->customBaseClass)
      ->setUseStandardEvents($this->useStandardEvents)
      ->getEvents();
  }

  private function getHolidays($date=null) {
    $parser = new Parser($this->locale);
    return $parser
      ->setDate($date ? Carbon::parse($date) : Carbon::now())
      ->setCustomBaseClass($this->customBaseClass)
      ->setUseStandardEvents($this->useStandardEvents)
      ->getHolidays();
  }

  private function getEventsAndHolidays($date=null) {
    $parser = new Parser($this->locale);
    return array_merge(
        $parser
            ->setDate($date ? Carbon::parse($date) : Carbon::now())
            ->setCustomBaseClass($this->customBaseClass)
            ->setUseStandardEvents($this->useStandardEvents)
            ->getEvents(),
        $parser
            ->setDate($date ? Carbon::parse($date) : Carbon::now())
            ->setCustomBaseClass($this->customBaseClass)
            ->setUseStandardEvents($this->useStandardEvents)
            ->getHolidays()
    );
  }

  private function whenIs($event, $year=null) {
    /*
    Should return an array of Carbon dates for a given event/holiday. The reason
    for the array value is that, there are some events that have the same name,
    but have been proposed by different sponsors. In this case, both dates would
    be returned in the array.

    For instance, if the method OnThisDay::whenIs('Halloween') is run during 2016,
    the return value would be [Carbon '10/31/2016'].

    Another instance, if the method OnThisDay::whenIs('Thanksgiving', '2012') is
    run, the return value would be [Carbon '11/22/2012'].
    */
  }
}
