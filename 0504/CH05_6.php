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
    $year = 0;
    $amount = 10000;
    $rate = 0.12;
    do {
        $interest = $amount*$rate;
        $amount += $interest;
        $year +=1;
    } while ($year <=5);
    print ("本金10000"."利率".$rate."<br />");
    print ("5年後的本利和".$amount."<br />");
    print ("賺的利息： ".($amount-10000))."<br />";
    ?>
</body>
</html>