<?php
// 1971年1月12日を「年/月/日」で表示する
$timestamp = mktime(0, 0, 0, 1, 12, 1971);
echo date("Y/m/d", $timestamp) . "\n";

// 2028年12月24日9時53分19秒を「年-月-日 時:分:秒」で表示する
$timestamp = mktime(9, 53, 19, 12, 24, 2028);
echo date("Y-m-d H:i:s", $timestamp) . "\n";
