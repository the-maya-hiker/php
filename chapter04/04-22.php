<?php
// abc.txtを書き込みモードで開く
$handle = fopen("abc.txt", "w");

// abc.txtをロックする
flock($handle, LOCK_EX);

// abc.txtにデータを書き込む
fwrite($handle, "この文章を書き込みます");

// abc.txtのロックを解除する
flock($handle, LOCK_UN);

// abc.txtを閉じる
fclose($handle);
