<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<?php
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        echo "<span style='color:red'>";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "o";
    }
    if ($i % 2 == 1) {
        echo "</span>";
    }
    echo "<br>";
}


?>
</body>
</html>