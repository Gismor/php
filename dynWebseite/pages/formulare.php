<form action="" method="post">

    <input type="text" placeholder="name" name="login"><br>
    <input type="password" placeholder="password" name="password"><br>
    <button type="submit">Anmelden</button>
    <input type="reset" value="Reset">
    <input type="hidden" name="page" value="formulare">

</form>

<?php
if (isset ($_POST["login"]) && isset ($_POST["password"])) {
    echo $_POST["login"] . ":" . $_POST["password"];
}

?>