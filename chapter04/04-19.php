<?php
// text.txtを読み込みモードで開く
$handle = fopen("text.txt", "r");

// ファイルの最後まで出力する
fpassthru($handle);
