<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CH06_練習3</title>
</head>
<body>
    <?PHP
    function show($stamp){
        $d = getdate($stamp); //顯示日期時間
        echo $d["year"]."/".$d["month"]."/". $d["mday"]." ";
        echo $d["hours"].":".$d["minutes"].":". $d["seconds"]; 	
    }
    $date = mktime(0,0,0,1,1,2016);
    $date_now = mktime();
    $twoDaysAgo = strtotime("-2 days",$date);
    $AfterFiveDays = strtotime("+5 days",$date);
    echo "2016/01/01 2天前的時間為: <br />";
    echo show($twoDaysAgo)."<br />";
    echo "2016/01/01 5天後的時間為: <br />";
    echo show($AfterFiveDays)."<br />";
    echo "目前的時間為:";
    echo show($date_now);
    ?>
</body>
</html>