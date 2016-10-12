<?php

namespace Skybluesofa\OnThisDay\Tests\Custom\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;

class July extends Month
{
    public static $recurringEvents = [
        "1" => ["Some Custom Event"],
    ];

    public static $recurringHolidays = [];

    public static $specificDateEvents = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
