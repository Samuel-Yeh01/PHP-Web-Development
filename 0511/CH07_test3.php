<!DOCTYPE html>
<html>
<head>
<title>CH07-練習3</title>
	   <meta charset="utf-8">
</head>
<body>
<?php
//指定陣列元素
$string1 = 'A-Lin~寂寞不痛.mp3';
$string2 = '五月天~你是唯一.mp3';
$string3 = '伍思凱~寂寞公路.mp3';
$arr_string = array($string1, $string2, $string3);
//foreach($arr_string as $key=>$value)
//  $str = $str.$value; 
print_r($arr_string);
echo '<br/>';
$string4 = explode("~",$arr_string[0]);
$string5= explode("~",$arr_string[1]);
$string6 = explode("~",$arr_string[2]);
print_r($string4);
echo $string4[0].'的歌曲是'.$string4[1].'<br/>';
print_r($string5);
echo $string5[0].'的歌曲是'.$string5[1].'<br/>';
print_r($string6);
echo $string6[0].'的歌曲是'.$string6[1].'<br/>';
?>
</body>
</html>
