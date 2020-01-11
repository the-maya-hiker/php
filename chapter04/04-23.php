<?php
// large.txtを開く
$handle = fopen("large.txt", "r");

// ファイルの終わりになるまで繰り返す
while (!feof($handle)) {
	
	// 1行読み込む
	$line = fgets($handle);

	// 読み込んだ内容を出力する
	echo $line;
}

// large.txtを閉じる
fclose($handle);
