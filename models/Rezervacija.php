<?php


class Rezervacija{

   public $rezervacijaID;
   public $zaposleniID;
   public $klijentID;
   public $aranzmanID;
   public $datum;
  
    public function __construct($rezervacijaID=null, $zaposleniID=null, $klijentID=null, $aranzmanID=null, $datum=null)
    {
        $this->rezervacijaID = $rezervacijaID;
        $this->zaposleniID=$zaposleniID;
        $this->klijentID=$klijentID;
        $this->aranzmanID=$aranzmanID;
        $this->datum=$datum;
    }

 

    public static function pretraziRezervacije($zaposleni, $sortiranje, mysqli $konekcija)
    {
        $sql = "SELECT * FROM rezervacija r join zaposleni z on r.zaposleniID = z.zaposleniID join klijent k on r.klijentID = k.klijentID join aranzman a on r.aranzmanID = a.aranzmanID";
        if($zaposleni != "1"){
            $sql .= " WHERE r.zaposleniID = " . $zaposleni;
        }
        $sql.= " ORDER BY r.datum " . $sortiranje;


        $resultSet = $konekcija->query($sql);
        $rezultati = [];
        while($red = $resultSet->fetch_object()){
            $rezultati[] = $red;
        }
        return $rezultati;
    }

    public static function dodajRezervaciju($zaposleniID, $klijentID, $aranzmanID, $datum, mysqli $konekcija)
    {
        return $konekcija->query("INSERT INTO rezervacija VALUES(null, '$zaposleniID' , '$klijentID', '$aranzmanID', '$datum' )");  
    }

    public static function izmeniRezervaciju($rezervacijaID, $datum, mysqli $konekcija)
    {
        return $konekcija->query("UPDATE rezervacija SET datum = '$datum' WHERE rezervacijaID = $rezervacijaID");
    }

    public static function obrisiRezervaciju($rezervacijaID, mysqli $konekcija)
    {
        return $konekcija->query("DELETE FROM rezervacija WHERE rezervacijaID = $rezervacijaID");
    }
}