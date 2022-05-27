<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH05_練習1</title>
</head>
<body>
    <?php
    $a = 900;
    $b = 1500;
    $c = 2300;
    if ($a >=1000) {
        # code...
        $discount = $a * 0.85;
        echo $a."元打折後為".$discount."元<br />";
    }else {
        echo $a."元沒有打折<br />";
    }
    if ($b >=1000) {
        # code...
        $discount = $b * 0.85;
        echo $b."元打折後為".$discount."元<br />";
    }else {
        echo $b."元沒有打折<br />";
    }
    if ($c >=1000) {
        # code...
        $discount = $c * 0.85;
        echo $c."元打折後為".$discount."元<br />";
    }else {
        echo $c."元沒有打折<br />";
    }
    ?>
</body>
</html>