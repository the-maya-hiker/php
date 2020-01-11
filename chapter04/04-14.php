<?php
// 現在の日時を「年/月/日 時:分:秒」で表示する
echo "現在、" . date("Y/m/d H:i:s") . "です\n";

// 2008年1月1日が何曜日かを表示する
$week = array("日曜日", "月曜日", "火曜日", "水曜日",
              "木曜日", "金曜日", "土曜日",);
echo "2008年1月1日は" . $week[date("w", 1199113200)] . "でした\n";