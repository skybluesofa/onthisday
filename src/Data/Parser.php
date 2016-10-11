<?php
namespace Skybluesofa\OnThisDay\Data;

use Carbon\Carbon;

class Parser {

  protected $locale = 'en_US';

  private $carbonDate = null;
  private $year = null;
  private $month = null;
  private $day = null;

  private $localePath = null;

  private $classPaths = [
    'custom' => null,
    'standard' => '\\Skybluesofa\\OnThisDay\\Data\\Region',
  ];
  private $useStandardEvents = true;

  public function __construct($locale=null) {
    $this->setLocale($locale);
    return $this;
  }

  public function setLocale($locale = 'en_US') {
    $this->locale = $locale;
    $this->localePath = null;
    return $this;
  }

  public function setDate(Carbon $date) {
    $this->carbonDate = $date;
    $this->year = $this->carbonDate->year;
    $this->month = $this->carbonDate->month;
    $this->day = $this->carbonDate->day;
    return $this;
  }

  public function setCustomBaseClass($customBaseClass) {
    $this->classPaths['custom'] = $customBaseClass ? $customBaseClass : null;
    return $this;
  }

  public function setUseStandardEvents($useStandardEvents=true) {
    $this->useStandardEvents = $useStandardEvents ? true : false;
    return $this;
  }

  public function getEvents() {
    return array_merge(
      $this->getRecurringDateBasedEvents(),
      $this->getSpecificDateBasedEvents(),
      $this->getRecurringConfigurationBasedEvents(),
      $this->getRecurringAdvancedConfigurationBasedEvents()
    );
  }

  public function getHolidays() {
    return array_merge(
      $this->getRecurringDateBasedHolidays(),
      $this->getSpecificDateBasedHolidays(),
      $this->getRecurringConfigurationBasedHolidays(),
      $this->getRecurringAdvancedConfigurationBasedHolidays()
    );
  }

  public function getEventsAndHolidays() {
    return array_merge(
      $this->getEvents(),
      $this->getHolidays()
    );
  }

  private function getMonthDataClass($classType='standard') {
    if (($classType=='standard' && !$this->useStandardEvents) || !array_key_exists($classType, $this->classPaths) || !$this->classPaths[$classType]) {
      return false;
    }

    $monthName = date("F", mktime(0, 0, 0, $this->carbonDate->month, 1));
    $classPath = $this->classPaths[$classType].$this->getLocalePath()."Month\\".$monthName;

    if (!class_exists($classPath)) {
      return false;
    }
    return $classPath;
  }

  private function getLocalePath() {
    if (is_null($this->localePath)) {
      $locale = explode('_', $this->locale);
      $this->localePath = '\\'.implode('\\', [ucfirst(strtolower($locale[0])), ucfirst(strtolower($locale[1]))] ).'\\';
    }
    return $this->localePath;
  }

  private function getMonthClasses() {
    $monthClasses = [];
    foreach (array_keys($this->classPaths) as $classType) {
      if ($monthClass = $this->getMonthDataClass($classType)) {
        $monthClasses[] = $monthClass;
      }
    }
    return $monthClasses;
  }

  private function getRecurringDateBasedEvents() {
    return $this->getRecurringDateBasedItems('events');
  }

  private function getRecurringDateBasedHolidays() {
    return $this->getRecurringDateBasedItems('holidays');
  }

  private function getRecurringDateBasedItems($type=null) {
    $propertyName = 'recurring'.ucfirst(strtolower($type));
    $items = [];
    foreach ($this->getMonthClasses() as $monthClass) {
      $monthReflection = new \ReflectionClass($monthClass);
      $itemData = $monthReflection->getStaticProperties();
      if (array_key_exists($propertyName, $itemData) && isset($itemData[$propertyName][$this->day])) {
        $items = array_merge($items, $itemData[$propertyName][$this->day]);
      }
    }
    return $items;
  }

  private function getSpecificDateBasedEvents() {
    return $this->getSpecificDateBasedItems('events');
  }

  private function getSpecificDateBasedHolidays() {
    return $this->getSpecificDateBasedItems('holidays');
  }

  private function getSpecificDateBasedItems($type=null) {
    $propertyName = 'specificDate'.ucfirst(strtolower($type));
    $items = [];
    foreach ($this->getMonthClasses() as $monthClass) {
      $monthReflection = new \ReflectionClass($monthClass);
      $itemData = $monthReflection->getStaticProperties();
      if (array_key_exists($propertyName, $itemData) && isset($itemData[$propertyName][$this->year][$this->day])) {
        $items = array_merge($items, $itemData[$propertyName][$this->year][$this->day]);
      }
    }
    return $items;
  }

  private function getRecurringConfigurationBasedEvents() {
    return $this->getRecurringConfigurationBasedItems('events');
  }

  private function getRecurringConfigurationBasedHolidays() {
    return $this->getRecurringConfigurationBasedItems('holidays');
  }

  private function getRecurringConfigurationBasedItems($type=null) {
    $propertyName = 'configuration'.ucfirst(strtolower($type));
    $items = [];
    foreach ($this->getMonthClasses() as $monthClass) {
      if (property_exists($monthClass, $propertyName)) {
        $monthStartDate = Carbon::now();
        $monthStartDate->setDateTime($this->year, $this->month, 1, 0, 0, 0);
        foreach ($monthClass::$$propertyName as $configuration => $itemList) {
          $configuration = str_replace(['%y','%Y'], $monthStartDate->year, $configuration);
          if ($this->carbonDate==Carbon::createFromTimestamp(strtotime($configuration))) {
            $items = array_merge($items, $itemList);
          }
        }
      }
    }
    return $items;
  }

  private function getRecurringAdvancedConfigurationBasedEvents() {
    return $this->getRecurringAdvancedConfigurationBasedItems('events');
  }

  private function getRecurringAdvancedConfigurationBasedHolidays() {
    return $this->getRecurringAdvancedConfigurationBasedItems('holidays');
  }

  private function getRecurringAdvancedConfigurationBasedItems($type=null) {
    $methodName = 'getRecurringAdvancedConfigurationBased'.ucfirst(strtolower($type));
    $items = [];
    foreach ($this->getMonthClasses() as $monthClass) {
      if (method_exists($monthClass, $methodName)) {
        $items = array_merge($items, call_user_func_array([$monthClass, $methodName], [$this->carbonDate]));
      }
    }
    return $items;
  }
}
