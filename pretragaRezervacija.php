<?php
require "dbBroker.php";
require "models/Rezervacija.php";

$zaposleni = trim($_GET['zaposleni']);
$sortiranje = trim($_GET['sortiranje']);

$rezervacije = Rezervacija::pretraziRezervacije($zaposleni, $sortiranje, $konekcija);

?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Klijent</th>
            <th>Aranzman</th>
            <th>Zaposleni</th>
            <th>Datum</th>
        </tr>
    </thead>
    <tbody>
 <?php

foreach ($rezervacije as $rez){
    ?>
    <tr>
        <td><?= $rez->imeK . " " . $rez->prezimeK?></td>
        <td><?= $rez->naziv?></td>
        <td><?= $rez->imeZap . " " . $rez->prezimeZap?></td>
        <td><?= $rez->datum ?></td>
    </tr>
<?php
}
?>
    </tbody>
</table>

