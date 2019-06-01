#!/usr/bin/env php
<?php
$args = getopt('b:', ['birthday::']);
if (isset($args['b']))
	$birthday = $args['b'];
else
	if (isset($args['birthday']))
		$birthday = $args['birthday'];
	else
		$birthday = date('Y-m-d');
/* php7
$birthday = $args['b'] || $args['birthday'] || date('Y-m-d');
*/
$today = date('Y-m-d');

$birthdayStamp = strtotime($birthday);
$todayStamp = strtotime($today);
$totalDays = floor(($todayStamp - $birthdayStamp) / 3600 / 24);

echo "your birthday: $birthday, you lived: $totalDays days\n";
