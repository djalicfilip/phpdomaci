<?php
require "dbBroker.php";
require "models/Rezervacija.php";

$rezervacije = Rezervacija::pretraziRezervacije("1", "asc", $konekcija);;

foreach ($rezervacije as $rez){

    ?>
    <option value="<?= $rez->rezervacijaID ?>"><?= $rez->imeK . " " . $rez->prezimeK . " (" . $rez->naziv . " - " . $rez->datum . " )"?></option>

<?php
}
?>