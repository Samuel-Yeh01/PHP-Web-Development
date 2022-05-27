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
    $amount = [900,1500,2300];
    $result = "";
    for ($i=0; $i <$amount.length; $i++) { 
        # code...
    }
    if ($amount >=1000) {
        # code...
        $discount = $amount * 0.85;
        $result = $amount."元打折後為".$discount."元<br />";
    }else {
        $result = $amount."元沒有打折<br />";
    }    
    ?>
</body>
</html>