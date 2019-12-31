<?php
$name = "佐藤";

if ($name === "山田"):
	echo "山田さんですね";
elseif ($name === "佐藤"):
	echo "佐藤さんですね";
elseif ($name === "中村"):
	echo "中村さんですね";
else:
	echo "どなたですか？";
endif;
