<?php

$gallery = createGallery('./bilder/', 7, 100);
echo $gallery;
function createGallery($srcdir, $n, $width, $height = null)
{

    $bilder = glob($srcdir . '*.jpg');  // Array mit Bildern

    $string = "<table>";
    $string .= "<tbody>";
    $string .= "<tr>";

    $counter = 1;


    foreach ($bilder as $bild) {
        $string .= "<td>";
        $string .= "<img src='$bild' width='$width'>";
        $string .= "</td>";
        if ($counter++ == $n) {
            $counter = 1;
            $string .= '</tr><tr>';
        }

    }

    $string .= "</tr>";
    $string .= "</tbody>";
    $string .= "</table>";


    return $string;

}

?>