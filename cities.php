<?php
function number_of_the_days($start_date, $number_of_trainings, $week_days) {
  $date = new DateTime($start_date);
  $date_week_day = date("w", $date->getTimestamp());
  $start_week_day = 8;

  foreach ($week_days as $week_day) {
    $date = new DateTime($start_date);
    $date->modify($week_day);
    $_week_day = date("w", $date->getTimestamp());
    $week_days_numeric[$week_day] = $_week_day;

    if ($date_week_day <= $_week_day && $start_week_day > $_week_day) {
      $start_week_day = $_week_day;
    }
  }

  $days = 0;

  do {
    for($i=$start_week_day;$i<=7;$i++) {//case if you want to calculate from first training day
    //for($i=$date_week_day;$i<=7;$i++) {//case if you want to calculate from input day
      $days++;
      if (in_array($i, $week_days_numeric)) {
        $number_of_trainings--;
        if (!$number_of_trainings) {
          break;
        }
      }
    }

    $start_week_day = 1;
  }while ($number_of_trainings);
  return $days;
}

echo number_of_the_days('2016-04-18', 6, ['thursday', 'tuesday', 'saturday']);