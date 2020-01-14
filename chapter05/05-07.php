<?php
// 除算をする関数
function div($x, $y) {
	if ($y !== 0) {
		return $x / $y;
	} else {
		throw new Exception("0で除算できません");
	}
}

$a = 10;
$b = 0;

// 除算した結果を表示する
try {
	echo "{$a}を{$b}で除算すると" . div($a, $b) . "です\n";
} catch (Exception $exception) {
	echo $exception->getMessage();
}
