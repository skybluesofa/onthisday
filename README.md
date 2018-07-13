[![Build Status](https://travis-ci.org/skybluesofa/onthisday.svg?branch=master)](https://travis-ci.org/skybluesofa/onthisday) [![Code Climate](https://codeclimate.com/github/skybluesofa/onthisday/badges/gpa.svg)](https://codeclimate.com/github/skybluesofa/onthisday) [![Test Coverage](https://codeclimate.com/github/skybluesofa/onthisday/badges/coverage.svg)](https://codeclimate.com/github/skybluesofa/onthisday/coverage) [![Total Downloads](https://img.shields.io/packagist/dt/skybluesofa/onthisday.svg?style=flat)](https://packagist.org/packages/skybluesofa/onthisday) [![Version](https://img.shields.io/packagist/v/skybluesofa/onthisday.svg?style=flat)](https://packagist.org/packages/skybluesofa/onthisday) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)

# On This Day
Get events and holidays for today (or any other day).

```
// Get events for a date
$events = (new OnThisDay)->getEvents('1/1/2016');

// Get holidays for a date
$events = (new OnThisDay)->getHolidays('1/1/2016');

// Get events and Holidays for a date
$events = (new OnThisDay)->getEventsAndHolidays('1/1/2016');
```

### What's the difference between an 'event' and a 'holiday'?
An 'event' is generally one of those fun, interesting, or informative dates that various organizations come up with. Some examples are 'National Coffee Day' or 'Talk Like a Pirate Day'.

A 'holiday', on the other hand, is one of those days for which you got off from school or send someone a card. Some examples are New Year's Day, Valentine's Day or the 4th of July.
