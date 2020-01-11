<?php
// 引数の値を1だけ加算する。参照渡しなので、
// 呼び出し側の値にも影響する
function increment(&$value) {
	$value++;
}

$a = 1;

// 2になる
increment($a);

echo "変更後の値は{$a}です";
