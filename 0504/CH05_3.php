<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH05_練習3</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 10;
    $result = 0;
    $op = "*";
    $op_TW = "";
    print ("\$a= ".$a."<br />");
    print ("\$b= ".$b."<br />");
    
    switch ($op) {
        case "+":
            $result = $a + $b;
            $op_TW = "加法";            
            break;
        case "-":
            $result = $a - $b;
            $op_TW = "減法";             
            break;
        case "*":
            $result = $a * $b;            
            $op_TW = "乘法"; 
            break;
        case "/":
            $result = $a / $b;            
            $op_TW = "除法"; 
            break;
        default:
            # code...
            break;
    }
    print ("執行".$op_TW."運算<br />");
    print ("運算結果\$a".$op."\$b = ".$result);
    ?>
</body>
</html>