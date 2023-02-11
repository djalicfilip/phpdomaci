<?php

class Aranzman {

    public $aranzmanID;
    public $naziv;
    public $datumOd;
    public $datumDo;
    public $cena;

    public function __construct($aranzmanID=null,$naziv=null,$datumOd=null,$datumDo=null,$cena=null)
    {
        $this->aranzmanID = $aranzmanID;
        $this->naziv=$naziv;
        $this->datumOd=$datumOd;
        $this->datumDo=$datumDo;
        $this->cena=$cena;

    }

    public static function vratiAranzmane(mysqli $konekcija)
    {
        $sql = "SELECT * FROM aranzman";
        $resultSet = $konekcija->query($sql);
        $rezultati = [];

        while($red = $resultSet->fetch_object()){
            $rezultati[] = $red;
        }
        return $rezultati;
    }

}



