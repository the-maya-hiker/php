<?php
interface Appliance
{
	// 電源を入れる
	public function changeSwitch($switch);
}

class TV implements Appliance
{
	private $switch = false;

	public function changeSwitch($switch) {
		$this->switch = (bool)$switch;
		if ($this->switch) {
			echo "テレビの電源を入れました\n";
		} else {
			echo "テレビの電源を切りました\n";
		}
	}
}

class Video implements Appliance
{
	private $switch = false;

	public function changeSwitch($switch) {
		$this->switch = (bool)$switch;
		if ($this->switch) {
			echo "ビデオの電源を入れました\n";
		} else {
			echo "ビデオの電源を切りました\n";
		}
	}
}

$appliances = array(new TV(),
                   new Video());

// 電化製品の電源を入れる
foreach ($appliances as $appliance) {
	$appliance->changeSwitch(true);
}
