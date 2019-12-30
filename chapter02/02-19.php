<?php
$greeting = "Let's study \"PHP\" !";
$name = "山田太郎";

// ヒアドキュメントを使う
echo <<< MESSAGE
$greeting
こんにちは！{$name}さん
MESSAGE;
