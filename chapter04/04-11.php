<?php
if (preg_match("/abc.+/", "abcdefghijklmn")) {
	echo "一致しました";
} else {
	echo "一致しませんでした";
}
