<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Helpers;

use Carbon\Carbon;

class Easter {
  public static function getFatTuesdayDate(Carbon $date) {
    return Carbon::createFromTimestamp(easter_date($date->year))->subDays(48);
  }

  public static function getMardiGrasDate(Carbon $date) {
    return Carbon::createFromTimestamp(easter_date($date->year))->subDays(47);
  }

  public static function getEasterDate(Carbon $date) {
    return Carbon::createFromTimestamp(easter_date($date->year));
  }
}
