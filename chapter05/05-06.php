<?php
// 除算をする関数
function div($x, $y) {
	if ($y !== 0) {
		return $x / $y;
	} else {
		return false;
	}
}

$a = 10;
$b = 0;

// 除算した結果を表示する
$result = div($a, $b);
if ($result) {
	echo "{$a}を{$b}で除算すると{$result}です\n";
} else {
	echo "{$b}では除算できません\n";
}
