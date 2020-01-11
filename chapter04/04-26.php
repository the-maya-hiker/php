<?php
$contents = "この文章を保存します";

// file_put_contents.txtをロックして$contentsの内容を書きこみます
file_put_contents("file_put_contents.txt", $contents, LOCK_EX);
