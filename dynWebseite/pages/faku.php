<?php
$zahl = "";
if (isset ($_GET["faku"])) {

    $zahl = $_GET["faku"];
}
?>

    <form>

        <input type="text" value="<?= $zahl ?>" placeholder="Fakultät berechnen" name="faku">
        <input type="hidden" name="page" value="faku">
        <button type="submit"> Berechnen</button>


    </form>

<?php

if (isset ($_GET["faku"])) {


    if (is_numeric($zahl)) {
        $zahl = floor($zahl);
        $erg = 1;
        for ($i = $zahl; $i > 0; $i--) {
            $erg *= $i;
        }
    }

    echo "Die Fakultät von $zahl ist: $erg";
    echo "Die Fakultät von $zahl ist:" . fak($zahl);

}
function fak($zahl)
{
    if ($zahl > 1)
        return $zahl * fak($zahl - 1);
    else
        return 1;
}

function fak2($zahl)
{
    return ($zahl > 1) ? $zahl * fak($zahl - 1) : 1;
}

?>