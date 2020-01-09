<?php
// 現在の日時を表す新しいDateTimeオブジェクトを作る
$now = new DateTime();

// 「年/月/日 時:分:秒」で表示する
echo $now->format("Y/m/d H:i:s") . "\n";

// 現在から125年と1日と12時間後の日時を表示する
$now->modify("125 years 1 day 12 hours");
echo $now->format("Y-m-d H:i:s") . "\n";

// さらに時刻を0時ちょうどにして表示する
$now->setTime(0, 0, 0);
echo $now->format("Y-m-d H:i:s") . "\n";
