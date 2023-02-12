<?php
require "dbBroker.php";
require "models/Rezervacija.php";

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

$poruka = "";

if(isset($_POST['izmeni'])){
    $rezervacija = trim($_POST['rezervacija']);
    $datum = trim($_POST['datum']);
    $datumF = date("Y-m-d", strtotime($datum));
   // $aranzman = trim($_POST['aranzman']);
    if(Rezervacija::izmeniRezervaciju($rezervacija, $datumF, $konekcija)){
        header("Location: home.php");
    }else{
        $poruka = "Rezervacija nije izmenjena";
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Turisticka agencija</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h3 id="por"><?= $poruka; ?></h3>
            </div>
            <div class="row">
                <form method="post" action="">
                    <label for="rezervacija">Rezervacija</label>
                    <select id="rezervacija" name="rezervacija" class="form-control">
                        <br><br>
                     </select> 
                    <label for="datum">Datum</label>
                    <input type="date" name="datum" class="form-control">
                    <br>
             
                    <button class="BtnForm" type="submit" name="izmeni">Izmeni</button>
                    <br> <br>
                    <a href="home.php", class="BtnForm">Nazad</a>

                </form>
            </div>

        </div>

    </div> 
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script src="js/main.js"></script>

    <script>
    function popuniRezervacije() {
            $.ajax({
                url: 'popuniRezervacije.php',
                success: function (data) {
                   $("#rezervacija").html(data);
                }
            });
        }
        popuniRezervacije();
  
      

        function popuniAranzmane() {

        $.ajax({
            url: 'popuniAranzmane.php',
            success: function (data) {
            $("#aranzman").html(data);
            }
        });
        }
        popuniAranzmane();



    </script>
</body>

</html>