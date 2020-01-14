<?php
// XMLデータ
$xml = <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<addresses>
	<person>
		<name>山田太郎</name>
		<address>東京都○○○</address>
		<tel>03-xxxx-xxxx</tel>
	</person>
	<person>
		<name>佐藤花子</name>
		<address>大阪府○○○</address>
		<tel>06-xxxx-xxxx</tel>
	</person>
</addresses>
EOD;

// SimpleXMLElementオブジェクトを作る
$simplexml = new SimpleXMLElement($xml);

// XMLから「山田太郎」という値を取り出す
$name = $simplexml->person[0]->name;

// 取り出した結果の文字コードを変換して表示する
// mb_internal_encoding関数はphp.iniでの設定値を返す
echo mb_convert_encoding($name, mb_internal_encoding(), "UTF-8");
