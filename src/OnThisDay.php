<?php
namespace Skybluesofa\OnThisDay;

use Carbon\Carbon;
use Skybluesofa\OnThisDay\Data\Parser;

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

  public function __call($method, $parameters) {
    return call_user_func_array([$this, $method], $parameters);
  }

  public static function __callStatic($method, $parameters) {
    $instance = new static;
    return call_user_func_array([$instance, $method], $parameters);
  }
}
