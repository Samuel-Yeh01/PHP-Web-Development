<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH05_練習5</title>
</head>
<body>
    <?php
    $fold = 0;
    $length =150;
    while ($length >= 20) {
        $length/=2;
        $fold +=1;
    }
    print ("對折的次數=".$fold."<br />");
    print ("繩子最終的長度=".$length."<br />");
    ?>
</body>
</html>