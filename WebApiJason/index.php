<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php


$url = 'http://www.openthesaurus.de/synonyme/search?q=Mond&format=application/json';
$auth = base64_encode('dneubauer:Oktober2015!');
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
echo '<pre>';
echo var_dump($content);
echo '</pre>';

$content['synsets'][0]['terms'][0]['term'];

echo '<ul>';
foreach ($content["synsets"] as $value) {
    foreach($value ["terms"] as $value1) {
        echo "<li>";
        echo $value1["term"].',';
    }
    echo "</li>";
}
echo "</ul>";


?>
</body>
</html>