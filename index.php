
<!DOCTYPE html><html lang="en">
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
<div id="header"></div>
<div id="header2"></div>
    <br><br><br><br><br>
<div class="login-form">
        <div class="main-div">
            <form method="post" action="">
            <div class="text-center mx-auto mb-5" data-wow-delay="0.1s" style="max-width: 600px;">
                <h3 id="por"><?= $poruka; ?></h3>
            </div>
                <div class="container"><center>
                    <label class="username">Korisničko ime</label>
                    <input type="text" name="username" class="form-control" required>
                    <br>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <br>
                    <br>
                    <button type="submit" class="BtnForm" name="submit">Prijavi se</button>
                </div></center>

            </form>
           
        </div>

        
    </div>
</body>
</html>