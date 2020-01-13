<?php
class TV
{
	private $switch = false;
	private $channel = 1;

	// 電源を入れる
	public function changeSwitch($switch) {
		$this->switch = (bool)$switch;
		if ($this->switch) {
			echo "電源を入れました\n";
		} else {
			echo "電源を切りました\n";
		}
		echo "現在のチャンネルは{$this->channel}です\n";
	}

	// チャンネルを変える
	public function channel($channel) {
		if (is_int($channel)) {
			$this->channel = (int)$channel;
			echo "チャンネルを{$this->channel}に変えました\n";
		}
	}
}
