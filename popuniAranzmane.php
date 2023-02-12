<?php
require "dbBroker.php";
require "models/Aranzman.php";

$aranzman = Aranzman::vratiAranzmane($konekcija);

foreach ($aranzman as $ar){

    ?>
    <option value="<?= $ar->aranzmanID ?>"><?= $ar->naziv ?> </option>

<?php
}
?>