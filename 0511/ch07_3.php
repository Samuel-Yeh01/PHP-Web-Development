<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TODO: -->
<?php
//指定陣列元素
$grades = array(95,85,76,56);
//計算成績總分
$total = 0;
$avg = 0.0;
echo "成績的內容為<br/>";
print_r($grades);
echo "<br/>";
//使用 for迴圈
echo "<br/>使用for迴圈算出----------";
for($i=0; $i<count($grades); $i++){

	$total += $grades[$i];
}
$avg = $total /4.0;
echo "<br/>四科總分:".$total."分";
echo "<br/>四科平均:".$avg."分<br/>";
//使用 foreach迴圈
echo "<br/>使用foreach迴圈算出------------<br/>";
$total = 0;
foreach ($grades as $element) {
   $total += $element;
}
$avg = $total /4.0;
echo "四科總分:".$total."分";
echo "<br/>四科平均:".$avg."分";
?>
</body>
</html>