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
    $serverIP = $_SERVER[REMOTE_ADDR];
    $serverPort = $_SERVER[SERVER_PORT];
    $serverPath = $_SERVER[PATH];
    $software = $_SERVER[SERVER_SOFTWARE];
    $clientIP = $_SERVER[REMOTE_ADDR];
    $clientPort = $_SERVER[REMOTE_PORT];
    $clientSoftware = $_SERVER[HTTP_SEC_CH_UA];
    $clientLanguage = $_SERVER[HTTP_ACCEPT_LANGUAGE];
    echo "伺服器IP位址:".$serverIp.'<br/>';
    echo "伺服器通訊埠:".$serverPort.'<br/>';
    echo "用戶端IP位址:".$clientIp.'<br/>';
    echo "用戶端通訊埠:".$clientPort.'<br/>';
    echo "伺服器軟體:".$software.'<br/>';
    echo "用戶端軟體:".$clientSoftware.'<br/>';
    echo "網頁軟體存放路徑:".$serverPath.'<br/>';
    echo "網頁語言:".$clientLanguage.'<br/>';
    ?>
</body>
</html>