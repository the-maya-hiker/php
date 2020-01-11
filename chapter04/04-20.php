<?php
// text.txtを読み込みモードで開く
$handle = fopen("text.txt", "r");

// text.txtを閉じる
fclose($handle);
