<?php
require "dbBroker.php";
require "models/Klijent.php";

$klijenti = Klijent::vratiKlijente($konekcija);

foreach ($klijenti as $klijent){

    ?>
    <option value="<?= $klijent->klijentID ?>"><?=$klijent->imeK . " " . $klijent->prezimeK ?> </option>

<?php
}
?>