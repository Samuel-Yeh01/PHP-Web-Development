<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH07_練習1</title>
</head>
<body>
    <?php
    $grades = array(78,55,69,93);
    $total = 0;
    $name_arr = array("江小魚","陳允傑","楊過","陳會安");
    for ($i=0; $i < count($grades);$i++) {
        echo "$i => $grades[$i] ";
        $total+= $grades[$i];
    }
    echo $total."<br />";
    for ($i=0; $i < count($name_arr)-1;$i++) {
        echo "$i => $name_arr[$i] ";
    }
    echo "<br />";
    for ($i=0; $i < count($name_arr);$i++) {
        echo "$i => $name_arr[$i] ";
    }
    ?>
</body>
</html>