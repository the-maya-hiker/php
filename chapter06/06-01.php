<?php
// Strictエラーが発生してしまうので、
// 一時的にエラー出力を制御する
error_reporting(E_ALL);

// Dateパッケージを読み込む
require_once "Date.php";

// Dateオブジェクトの作成
$now = new Date();

// 整形した日付を表示する
echo $now->format("%Y/%m/%d");
