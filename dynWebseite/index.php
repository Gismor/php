<?php
$pages = [
    "home"  => "Allgemeines",
    "lists" => "Listen",
    "tables" => "Tabellen",
    "formulare" => "Formulare",
    "thesaurus" => "Thesaurus",
    "faku" => "Fakultät",
    "gallery" => "Bildgallerie"
];

if (isset ($_GET["page"])  && isset ($pages[$_GET["page"]])) {
    $currentPage = $_GET["page"];
} else {
    $currentPage = "home";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    echo "<title>PHP</title>";
    ?>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
<?php
require 'head.php';
echo "<div id ='main'>";
require 'navigation.php';
require 'content.php';
echo "</div>";
require 'foot.php';






?>
</body>
</html>