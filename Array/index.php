<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<?php


$meinArray = [
    "Alfred" => [
        "Audi A4" => ["schwarz", "12 Jahre", "180PS"]
    ],
    "Ingrid" => [
        "VW Käfer" => ["geld", "6 Jahre", "110PS"]
    ],
    "Lisa" => [
        "VW Lupo" => ["rot", "1 Tag", "90PS"]
    ]
];

$meinArray ["Alfred"]["Porsche"] = ["schwarz", "12 Jahre", "180PS"];

echo "<ul>";
foreach ($meinArray as $name => $autos) {
    echo "<li>$name<ol>";


    foreach ($autos as $auto => $eigenschaften) {
        echo "<li>$auto<ul>";
            echo "</li>";
        foreach($eigenschaften as $value ){
            echo "<li>$value</li>";
        }

        echo "</ul></li>";
    }
    echo "</ol></li>";
}
echo "</ul>";



?>


</body>
</html>