<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str1 = "A-Lin~寂寞不痛.mp3";
    $str2 = "五月天~你是唯一.mp3";
    $str3 = "伍思凱~寂寞公路.mp3";
    $arr_string = array($str1,$str2,$str3);
    print_r($arr_string);
    echo "<br />";

    $str4 = explode("~",$str1);
    $str5 = explode("~",$str2);
    $str6 = explode("~",$str3);
    print_r($str4);
    echo $str4[0]." 的歌曲是 ".$str4[1]."<br />";
    print_r($str5);
    echo $str5[0]." 的歌曲是 ".$str5[1]."<br />";
    print_r($str6);
    echo $str6[0]." 的歌曲是 ".$str6[1]."<br />";
    ?>
</body>
</html>