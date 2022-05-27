<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>CH06_練習3</title>
<style>

</style>

</head>
<body>

<?php
function show($stamp){
 $d = getdate($stamp); //顯示日期時間
 echo $d["year"]."/".$d["month"]."/". $d["mday"]." ";
 echo $d["hours"].":".$d["minutes"].":". $d["seconds"]; 	
}

date_default_timezone_set('Asia/Taipei'); //宣告為台北時區
$date = mktime(0,0,0,1,1,2016); //取得 2016/1/1 的時間刻記
$date_now = mktime(); //取得現在的時間刻記
print "2016/01/01 2天前的時間為:"."<br/>";
//顯示 2016/1/1前二天的時間刻記
echo show(strtotime("-2 days",$date))."<br/>"; 
print "2016/01/01 5天後的時間為:"."<br/>";
//顯示現在時間5天前的時間刻記
echo show(strtotime("+5 days",$date))."<br/>";
echo "目前的時間為:"."<br>"; 
//顯示現在時間時間刻記
echo show(mktime())."<br/>";

?>

</body>
</html>
