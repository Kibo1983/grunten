<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Textilreinigung, SB-Waschsalon, Bügelservice, Mangelservice, Polsterreinigung, Teppichreinigung sowie Teppichreperatur">
    <meta name="author" content="Grünten REINIGUNG">
    <meta name="publisher" content="Grünten REINIGUNG">
    <meta name="twitter:card" content="images/favicon.webp">
    <title>Grünten Reinigung in Sonthofen - Textilreinigung und SB-Waschsalon.</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


    <div id="hero">
        <div class="content">
            <!-- navbar -->
            <nav>
                <div class="container" style="position: relative;">
                    <a href="/" title="home-page">
                        <img src="images/logo.png" alt="logo">
                    </a>
                    <div class="responsive" id="nav-links">
                        <ul>
                            <li><a href="index.html" title="ÜBER UNS">ÜBER UNS</a></li>
                            <li><a href="index.html" title="UNSERE WERTE">UNSERE WERTE</a></li>                            
                            <li><a href="index.html" title="BILDER">BILDER</a></li>
                            <li><a href="index.html" title="PREISE">PREISE </a></li>
                            <li><a href="index.html" title="ÖFFNUNGZEITEN">ÖFFNUNGZEITEN</a></li>
                            <li><a href="kontakt.php" title="KONTAKT">KONTAKT</a></li>
                            <li><a href="impressum.html" title="IMPRESSUM">IMPRESSUM</a></li>
                            <li><a href="datenschutz.html" title="DATENSCHUTZ">DATENSCHUTZ</a></li>
                        </ul>
                    </div>
                    <img src="images/nav.png" alt="icon" id="nav-icon">                    
                </div>
            </nav>
            <!-- section-1 -->
            <div class="container section-1">
                <h1>Grünten Reinigung in Sonthofen</h1>
                <p>Textilreinigung, SB-Waschsalon, Bügelservice, Mangelservice, Polsterreinigung, Teppichreinigung sowie
                    Teppichreperatur</p>
            </div>
        </div>
    </div>


    <div class="section-6" id="kontakt">
        <div class="container">
            <h2 class="text-center">KONTAKTFORMULAR</h2>
            <div class="row content">
                <div class="col-md-6">
                    <h4>Bei Fragen können Sie gerne Kontakt mit uns aufnehmen.</h4>
                    <hr>
                    <p> Grünten Reinigung <br> Hirschstr. 3 <br> 87527 Sonthofen <br> Deutschland</p>
                    <p>Telefon: 08321 / 88 091</p>
                    <p> info@gruenten-reinigung.de</p>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <h1>Kontakt</h1>
                    </div>
                    
                    <?php
                    if(isset($_POST["submit"])){
                      mail("info@reinigung-gruenten.de", 
                           "Kontaktformular", 
                           '
                           Name: '.$_POST["name"].' 
                           Email: '.$_POST["email"].' 
                           Nachricht: '.$_POST["message"]);
                      ?>
                      <h1 style="color: green;">Das Kontaktformular wurde abgesendet!</h1>
                      <?php
                    }
                     ?>
    
                    
                    <form action="kontakt.php" method="post">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="message" required></textarea>
                        <button type="submit" name="submit">Absenden</button>
                    </form>
                    
                </div>
            </div>            
        </div>
    </div>

    <footer id="offnungzeiten">
        <div class="container">
            <div class="row"> 
                <div class="col-md-6">
                    <h4 class="text-center">ÖFFNUNGZEITEN</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-center">SB-Waschsalon</h5>
                            <hr>
                            <p class="text-center"> Montag bis Sonntag: 8-21 Uhr</p>
                            <p class="text-center"> 365 Tage im Jahr</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center">Textilreinigung</h5>
                            <hr>
                            <p class="text-center"> Montag bis Freitag</p>
                            <p class="text-center"> 08:30 - 12:30</p>
                            <p class="text-center"> 14:00 - 18:00</p>
                            <p class="text-center"> Samstag:  09:00 - 12:00</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h4 class="text-center">Bei Fragen können Sie gerne Kontakt mit uns aufnehmen</h4>
                    <hr>
                    <p class="text-center"> Grünten Reinigung <br> Hirschstr. 3 <br> 87527 Sonthofen <br> Deutschland</p>
                    <p class="text-center">Telefon: 08321 / 88 091</p>
                    <p class="text-center"> info@gruenten-reinigung.de</p>
                </div>
                
                <div class="col-md-12">
                    <hr>
                    <p class="text-center">© KIBO. All rights reserved | Design by <a href="www.kibo-service.de" target="_blank">KIBO IT SERVICES</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>    
    <script>
        window.onload = function () {
            $('#nav-icon').click(function () {
                $('#nav-links').toggle("bilind");
                return false;
            });                    
        }
    </script>
</body>
</html>