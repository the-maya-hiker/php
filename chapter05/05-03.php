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
		if ($this->switch && is_int($channel)) {
			$this->channel = (int)$channel;
			echo "チャンネルを{$this->channel}に変えました\n";
		}
	}
}

// テレビオブジェクトを用意する
$tv = new TV();

// 電源を入れる
$tv->changeSwitch(true);

// チャンネルを変える
$tv->channel(3);

// 電源を切る
$tv->changeSwitch(false);

// 電源が切れているとチャンネルが変わらない
$tv->channel(9);
