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
    function a ($a1,$a2){
        if ($a1 > $a2) return $a1 + $a2;
        else return $a1*$a2;
    }
    function b ($a1,$a2) {
        if ($a2===0) return -1;
        else return $a1/$a2;
        
    }
    
    $a1 = 25;
    $a2 = 30;
    print ("函數a(): ".a($a1,$a2)."<br />");
    print ("函數b(): ".b($a1,$a2)."<br />");
    ?>

</body>
</html>