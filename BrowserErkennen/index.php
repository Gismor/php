<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<?php
$kennung = $_SERVER['HTTP_USER_AGENT'];


if(strpos($kennung, 'Firefox')!==false) {
    echo "Ich bin der Firefox";
}
elseif(strpos($kennung, 'Chrome')!==false) {
    echo "Ich bin der Chrome";
}


?>


</body>
</html>