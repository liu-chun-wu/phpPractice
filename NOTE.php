<?php
$data = '123';
?>
<?= $data; ?>
<?
//php縮寫
/*
1.
在宣告為PHP區域時會打上<?php ?>，而它的縮寫是<? ?>
在Apache Web Server 剛架設完縮寫功能未開啟，很多PHP新手會很疑惑地抓不到為何不能執行PHP程式碼，而是直接在頁面上顯示出來程式碼
通常是因為在宣告PHP區域是使用縮寫的關係
2.
echo $str; 的縮寫為 <?= $str; ?>即可，等於是跟這個PHP區域說，我這個PHP區域就是這個變數而已，輸出結果是一樣的
*/
?>