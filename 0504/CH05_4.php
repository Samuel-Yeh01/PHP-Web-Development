<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH05_練習4</title>
</head>
<body>
<?php
    $total1 = 0;
    $total2 = 0;
    for ($i=1; $i<=100 ; $i++) { 
        $total1 += $i;
        if ($i%2===1) {
            $total2 += $i;
        }
    }
    // $total2 = (1+99)*50/2;
    print ("1+2+3+......+100 = ".$total1."<br />");
    print ("1+3+5.....+99 = ".$total2."<br />");
?>
</body>
</html>