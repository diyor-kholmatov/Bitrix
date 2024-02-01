<?php
function calculateClockAngle($hours, $minutes) {
    if ($hours < 0 || $hours > 12 || $minutes < 0 || $minutes > 59) {
        return "Неверные часы или минуты.";
    }

    $hours = $hours % 12;
    $hourAngle = 0.5 * (60 * $hours + $minutes);
    $minuteAngle = 6 * $minutes;

    $angle = abs($hourAngle - $minuteAngle);
    $angle = ($angle > 180) ? 360 - $angle : $angle;

    return $angle;
}

$hours = 7;
$minutes = 25;
$result = calculateClockAngle($hours, $minutes);

echo "На часах $hours часов $minutes минут, угол между стрелками: $result градусов.";
?>