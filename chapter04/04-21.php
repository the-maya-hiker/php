<?php
// text.txtを読み込みモードで開く
$handle = fopen("text.txt", "r");

// 64バイトまで読み込む
$text = fread($handle, 64);

// text.txtを閉じる
fclose($handle);

// fread関数で読み込んだ内容を出力する
echo $text;
