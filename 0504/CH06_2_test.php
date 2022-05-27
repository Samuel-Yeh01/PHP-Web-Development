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
require ("CH06_2.php");
require "CH6_4_1.inc";
$s1 = 89;
$s2 = 95;
$s3 = 79;
print ("第一位學生成績: ".$s1."<br />");
print ("第二位學生成績: ".$s2."<br />");
print ("第三位學生成績: ".$s3."<br />");
print ("成績平均: ".average ($s1,$s2,$s3)."<br />");
print ("成績總和: ".sum($s1,$s2,$s3)."<br />");
?>
</body>
</html>