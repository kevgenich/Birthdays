#!/usr/bin/env php
<?php
$birthday = '1985-11-03';
$today = date('Y-m-d');

$birthdayStamp = strtotime($birthday);
$todayStamp = strtotime($today);
$totalDays = floor(($todayStamp - $birthdayStamp) / 3600 / 24);

echo "your birthday: $birthday, you lived: $totalDays days\n";
