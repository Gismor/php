<?php

$gallery = createGallery('./bilder/',7,100);
echo $gallery;
function createGallery($srcdir, $n, $width, $height = null)
{

    $bilder = glob($srcdir.'*.jpg');



}

?>