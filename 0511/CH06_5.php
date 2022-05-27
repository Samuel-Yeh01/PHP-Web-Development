<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch6_6_4.php</title>
</head>
<?php
// 自訂的錯誤處理函數
function myErrorHandler($type,$msg,$file,$line) {
    switch( $type ) {
       case E_USER_ERROR:
          echo "<b>自訂致命錯誤</b><br/>"; break;
       case E_USER_WARNING:
          echo "<b>自訂警告錯誤</b><br/>"; break;
       case E_USER_NOTICE:
          echo "<b>自訂注意錯誤</b><br/>"; break;
    }
    echo "檔案: $file 第: $line 行<br/>"; // 顯示錯誤訊息
    echo "錯誤訊息: <b>$msg</b> <br/>";
    echo "<br />";
    // if ( $type == E_USER_ERROR ) {
    //    echo "<font color=red>終止程式執行</font>";
    //    die();  // 終止程式執行
    // }
 }
// 檢查使用者密碼, 產生自訂錯誤
function valid_num($num) {
    if ( $num >10 ) {
       trigger_error("數字太大!", E_USER_ERROR);
    //    echo "<br />";
    } 
    elseif ( $num <= 0 ) {
    trigger_error("數字太小!", E_USER_WARNING);
    // echo "<br />";
    }
    else  // 全是數字 
      echo "數字適中!";
}

set_error_handler('myErrorHandler'); // 指定錯誤處理函數
?>
</head>
<body>
<?php
echo "數字15<br />";
valid_num(15);
echo "數字-1<br />";
valid_num(-1);
echo "數字5<br />";  
valid_num(5);      
echo "<br />測試產生使用者的自訂錯誤結束....<br/>";
?>
</body>
</html>