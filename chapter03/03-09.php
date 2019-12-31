<?php
$name = "佐藤";

switch ($name) {
case "山田":
case "佐藤":
case "中村":
	echo "こんにちは！" . $name . "さん";
	break;
default:
	echo "初めまして";
}
