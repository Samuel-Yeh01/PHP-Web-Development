<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH05_練習2</title>
</head>
<body>
    <?php
    $a = 155;

    if ($a <0) {
        echo "小孩身高不得為負數，請重新設定變數。";
    }elseif ($a >= 121){
        // $discount= $a*0.85;
        echo $a."公分的小孩為全票<br />";
    }elseif ($a>=111 && $a<=120) {
        echo  $a."公分的小孩為半票<br />";
    }elseif ($a>=0 && $a<=110) {
        echo  $a."公分的小孩為免費<br />";
    }
    ?>
</body>
</html>