<?php

// Set the target date and time for New Year's (in your server's timezone)
$targetDate = new DateTime('2024-01-01 00:00:00', new DateTimeZone('Europe/Athens'));

// Get the current date and time
$currentDate = new DateTime('now', new DateTimeZone('Europe/Athens'));

// Calculate the time difference
$timeDifference = $targetDate->getTimestamp() - $currentDate->getTimestamp();

// Calculate time components
$days = floor($timeDifference / (24 * 60 * 60));
$hours = floor(($timeDifference % (24 * 60 * 60)) / (60 * 60));
$minutes = floor(($timeDifference % (60 * 60)) / 60);
$seconds = $timeDifference % 60;

// Return the time components as JSON
echo json_encode(array(
    'days' => max(0, $days),
    'hours' => max(0, $hours),
    'minutes' => max(0, $minutes),
    'seconds' => max(0, $seconds)
));

?>
