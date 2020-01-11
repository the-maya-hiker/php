<?php
// text.txtが存在するかどうか調べる
if (file_exists("text.txt")) {
	echo "ファイルは存在します。\n";
} else {
	echo "ファイルは存在しません。\n";
}
