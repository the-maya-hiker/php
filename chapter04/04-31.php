<?php
// 引数の値を1だけ加算する。値渡しなので、
// 呼び出し側の値には影響しない
function increment($value) {
	$value++;
}

$a = 1;
increment($a);

// 1のまま
echo "変更後の値は{$a}です";
