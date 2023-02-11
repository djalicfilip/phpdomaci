<?php

class Klijent{

    public $klijentID;
    public $imeK;
    public $prezimeK;
    public $brojTelefona;
    

    public function __construct($klijentID=null,$imeK=null,$prezimeK=null,$brojTelefona=null)
    {
        $this->klijentID = $klijentID;
        $this->imeK=$imeK;
        $this->prezimeK=$prezimeK;
        $this->brojTelefona=$brojTelefona;
    }

    public static function vratiKlijente(mysqli $konekcija)
    {
        $sql = "SELECT * FROM klijent";
        $resultSet = $konekcija->query($sql);
        $rezultati = [];

        while($red = $resultSet->fetch_object()){
            $rezultati[] = $red;
        }
        return $rezultati;
    }

    
    public static function dodajKlijenta($imeK, $prezimeK, $brojTelefona, mysqli $konekcija)
    {
        return $konekcija->query("INSERT INTO klijent VALUES(null, '$imeK' , '$prezimeK', '$brojTelefona')");
    }
}

?>

