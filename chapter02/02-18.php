<?php
// シングルクオーテーションとエスケープシーケンス
echo 'Let\'s study PHP !';
echo 'こんにちは\n';

// ダブルクオーテーションとエスケープシーケンス
$greeting = "Let's study \"PHP\" !";
$name = "山田太郎";

echo "$greeting\n";
echo "こんにちは！{$name}さん\n";
