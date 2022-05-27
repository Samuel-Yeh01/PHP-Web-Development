<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_2_4.php</title>
</head>
<?php
function sum_avg() {
   $count = func_num_args();
   echo "分數個數: $count <br/>";
   // 顯示參數值
   for ( $i = 0; $i < $count; $i++ ) {
      $score = func_get_arg($i);
      echo "分數 ". ($i+1) ." => ".$score." " ;
   }
   $total = 0;
   $array = func_get_args();  // 取得陣列
   // 計算總和
   for ( $i = 0; $i < $count; $i++ )
      $total += $array[$i];
   echo "<br/>分數總和: $total<br/>";
   $avg = $total/$count;
   echo "<br/>平均總和: ".$avg."<br/>";
}

sum_avg(95, 85,76,56);

?>
</body>
</html>
