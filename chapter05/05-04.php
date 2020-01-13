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

	// 電源の状態を返す
	public function getSwitch() {
		return $this->switch;
	}
}

class RecordableTV extends TV
{
	private $is_recording = false;

	// 録画を開始する
	public function record($record) {
		if ($this->getSwitch()) {
			$this->is_recording = (bool)$record;
			if ($this->is_recording) {
				echo "録画中です\n";
			} else {
				echo "録画中ではありません\n";
			}
		}
	}
}

// 電源を入れ、チャンネルを3にする
$tv = new RecordableTV();
$tv->changeSwitch(true);
$tv->channel(3);

// 録画する
$tv->record(true);
$tv->record(false);

// 電源を切る
$tv->changeSwitch(false);
