<?php
function greet($name, $times = 3) {
	for ($i = 0; $i < $times; $i++) {
		echo "こんにちは、{$name}さん\n";
	}
}

// 1回だけメッセージが表示されます
greet("鈴木", 1);

// 3回メッセージが表示されます
greet("山田");
