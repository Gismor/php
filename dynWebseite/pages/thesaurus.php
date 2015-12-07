<?php
$wort = "";
if (isset ($_GET["suche"])) {

    $wort = $_GET["suche"];
}
?>


<form>
    <input type="text" value="<?=$wort?>" placeholder="suchwort" name="suche">
    <input type="hidden" name="page" value="thesaurus">
    <button type="submit"> Suchen</button>

</form>


<?php

if (isset ($_GET["suche"])) {


    $url = 'http://www.openthesaurus.de/synonyme/search?q=' . $wort . '&format=application/json';
    $auth = base64_encode('dneubauer:Dezember2015!');
    $proxy_resource = array(
        'http' => array(
            'proxy' => 'tcp://proxy:8080',
            'request_fulluri' => true,
            'header' => "Proxy-Authorization: Basic $auth",
        ),
    );
    $stream_content = stream_context_create($proxy_resource);
    $json = file_get_contents($url, false, $stream_content);
    $content = json_decode($json, true);


    $content['synsets'][0]['terms'][0]['term'];

    echo '<ul>';
    foreach ($content["synsets"] as $value) {
        foreach ($value ["terms"] as $value1) {
            echo "<li>";
            echo $value1["term"] . ',';
        }
        echo "</li>";
    }
    echo "</ul>";
}
?>

