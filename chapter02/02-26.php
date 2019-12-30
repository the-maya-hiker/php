<?php
// 添字配列から値を取り出して表示する
$php = array("PHP3", "PHP4", "PHP5");
echo "{$php[0]}\n";

// 連想配列から値を取り出して表示する
$maximum_version = array("PHP3" => "3.0.18",
                         "PHP4" => "4.4.8",
												 "PHP5" => "5.2.6");
echo $maximum_version["PHP5"];
