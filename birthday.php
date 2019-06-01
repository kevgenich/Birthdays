<?php
namespace kevgenich;
class Birthday {
	private $birthday;
	private $today;

	public function __construct($birthday) {
		$this->birthday = $birthday;
		$this->today = date('Y-m-d');
	}

	public function calcDays() {
		$birthdayTime = strtotime($this->birthday);
		$todayTime = strtotime($this->today);
		return floor(($todayTime - $birthdayTime) / 3600 / 24);
	}
}
