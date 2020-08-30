<?php

$slaptas = 'kljhkh';
$csrf = md5($_SERVER['HTTP_USER_AGENT'].$slaptas);
var_dump($_SERVER['HTTP_USER_AGENT'])
?>
<form action="" method="post">

    <input type="hidden" name="csrf" value="<?= $csrf ?>">
    <input type="submit" value="Spaust">

</form>

<?php

if (!empty($_POST)) {
    if ($csrf != $_POST['csrf']){
        echo 'blogai';
    } else {
        echo 'Gerai';
    }
}
