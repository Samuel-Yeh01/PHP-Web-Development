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
    // TODO: 把變數所存取的資料顯示出來~
    ?>
</body>
</html>