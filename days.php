#!/usr/bin/env php
<?php
require_once('vendor/autoload.php');

$args = getopt('b:', ['birthday::']);
if (isset($args['b']))
	$birthday = $args['b'];
else
	if (isset($args['birthday']))
		$birthday = $args['birthday'];
	else
		$birthday = date('Y-m-d');

$days = new \kevgenich\Birthday($birthday);
$totalDays = $days->calcDays();

echo "your birthday: $birthday, you lived: $totalDays days\n";
