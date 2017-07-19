<?php

// 0. 先看一遍 PHP_Debug.pdf，尤其是除錯器的螢幕截圖
// 
// 1. 滑鼠點按下列這行行號的左邊，設定中斷點(紅點)
$sData = readDataFile("pick3.txt");

// 2. 滑鼠點按 C9 IDE 下方的「Run in Debug Mode」以開啟除錯模式
// 3. 滑鼠點按 C9 IDE 右上方的「Run Project」

showHotColdList($sData);

// 4. 試一下 Resume, Step Over, Step Into 等功能

// 5. 在 showHotColdList 的 echo 那行也設中斷點
//    用 Resume 快轉到新的中斷點


// 讀取資料檔
function readDataFile($sFilname) {
	$result = "";
	$f = fopen ( $sFilname, "r" );
	while ( ! feof ( $f ) ) {
		$line = fgets ( $f );
		$result .= Trim ( $line );
	}
	fclose ( $f );
	return $result;
}

// 顯示冷號熱號數列
function showHotColdList($sData) {
	$result = "0123456789";
	$iLen = strlen ( $sData );
	for($iPos = 0; $iPos < $iLen; $iPos ++) {
		$ch = substr ( $sData, $iPos, 1 );
		$result = $ch . str_replace ( $ch, "", $result );
	}
	echo substr ( $result, 0, 5 ) . "-" . substr ( $result, 5, 5 ); 
}

?>
