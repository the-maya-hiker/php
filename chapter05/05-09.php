<?php
// XMLファイルを読み込む
$simplexml = simplexml_load_file("addresses.xml");

// XMLから「山田太郎」という値を取り出す
$name = $simplexml->person[0]->name;

// 取り出した結果の文字コードを変換して表示する
// mb_internal_encoding関数はphp.iniでの設定値を返す
echo mb_convert_encoding($name, mb_internal_encoding(), "UTF-8");
