<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellung</title>

    <!--------------------------------------------
        Bootstrap CSS - Quelle: https://bit.ly/3uLcnCt
    ----------------------------------------->
    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!--------------------------------------------
        CSS Prüfungsteil 1 
    ----------------------------------------->
    <link rel="stylesheet" href="style.css">

    <!--------------------------------------------
        CSS Prüfungsteil 2
    ----------------------------------------->
    <link rel="stylesheet" href="style-w3.css">
</head>
<body>

    <!--------------------------------------------
        Skript - Formular Felder
    ----------------------------------------->
    <?php 

        /*  Variablen erstellen und Werte aus Post von accessoires.php ziehen */
        $hidden = '';
        $success = '';
        $vorname = $_POST["vorname"];
        $nachname = $_POST["nachname"];
        $strasse = $_POST["strasse"];
        $nummer = $_POST["hausnummer"];
        $plz = $_POST["plz"];
        $ort = $_POST["ort"];
        $email = $_POST["mail"];
        $telefon = $_POST["telefon"];
        $date = $_POST["date"];
        $sum = $_POST["sum"];

        /*  IF-Statement Wenn der Submit Button gedrückt wurde   */
        if(isset($_POST["submit"])) {
            /*  CSV Datei öffnen   */
            $file_open = fopen("contact_data.csv", "w");
            /*  Array für die Zeilen erstellen   */
            $form_data = array(
                /*  1. Zeile - Spalten Beschreibung   */
                array('Vorname', 'Nachname', 'Straße', 'Hausnummer', 'PLZ', 'Ort', 'E-Mail', 'Telefon', 'Lieferdatum', 'Preis'), 
                /*  2. Zeile - Werte der Spalten   */
                array($vorname, $nachname, $strasse, $nummer, $plz, $ort, $email, $telefon, $date, $sum)
            );
            /*  Für jede Array-Zeile eine CSV Zeile in die Datei setzen   */
            foreach ($form_data as $fields) {
                fputcsv($file_open, $fields);
            }
            /*  Success Botschaft zeigen   */
            $success = "<h2>Vielen Dank für die Bestellung!</h2><br><p>Sie finden die Bestelldaten in der Datei: contact_date.csv</p>";
            /*  Formular verstecken   */
            $hidden = "hidden";
        }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar--dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo-dark.svg" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLeistungen" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Leistungen
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.6" d="M8.825 0.142853L5 3.67476L1.175 0.142853L0 1.23019L5 5.85714L10 1.23019L8.825 0.142853Z" fill="white" fill-opacity="0.8"/>
                            </svg>                            
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarLeistungen">
                            <a class="dropdown-item" href="index.html">Leistungen</a>
                            <a class="dropdown-item" href="index.html#pflegetipps">Pflegetipps</a>
                            <a class="dropdown-item" href="index.html#maßschuh">Maßschuh</a>
                        </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarJubiläum" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Jubiläum
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.6" d="M8.825 0.142853L5 3.67476L1.175 0.142853L0 1.23019L5 5.85714L10 1.23019L8.825 0.142853Z" fill="white" fill-opacity="0.8"/>
                                </svg>  
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarJubiläum">
                                <a class="dropdown-item" href="jubiläum.html">Jubiläum</a>
                                <a class="dropdown-item" href="jubiläum.html#chronologie">Chronologie</a>
                                <a class="dropdown-item" href="jubiläum.html#stimmen">Stimmen</a>
                            </div>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontakt">Kontakt</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="jubiläum.html">Impressum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container--index">
            <section>
                <div class="container">
                    <div class="section-headline <?php echo $hidden?>">
                        <h2>Bestellformular</h2>
                        <hr class="line--headline-leistungen">
                        <h4>Schuhmanufaktur Formschön</h4>
                    </div>
                    <div class="form_wrapper form_wrapper--bestellung <?php echo $hidden?>">
                        <form method="post">
                            <div class="form-couple">
                                <input type="text" name="vorname" required="required" placeholder="Vorname*">
                                <input type="text" name="nachname" required="required" placeholder="Nachname*">
                            </div>
                            <div class="form-couple form-couple--address">
                                <input type="text" name="strasse" required="required" placeholder="Straße*">
                                <input type="text" name="hausnummer" required="required" placeholder="Hausnummer*">
                            </div>
                            <div class="form-couple form-couple--ort">
                                <input type="text" name="plz" required="required" placeholder="Postleitzahl*">
                                <input type="text" name="ort" required="required" placeholder="Ort*">
                            </div>
                            <input type="email" name="mail" required="required" placeholder="E-Mail*">
                            <input type="tel" name="telefon" placeholder="Telefon" pattern="^[0-9/\+\-\s]*$">
                            <input type="date" name="date" min="<?php echo date("Y-m-d"); ?>" placeholder="Gewünschtes Lieferdatum">
                            <p id="total_price"></p>
                            <div class="form-send">
                                <input type="submit" name="submit" value="Kostenpflichtig bestellen" class="header--jubiläum__btn btn--w3">
                                <input type="hidden" id="sum" name="sum" value="0">
                            </div>
                        </form>
                    </div>
                    <div class="succes_wrapper">
                        <?php echo $success?>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container--index">
            <div class="container">
                <div class="footer--top" id="kontakt">
                    <div class="footer__text">
                        <h3>Öffnungszeiten</h3>
                        <p>Montag–Freitag 9–17 Uhr</p>
                        <p>Samstag	10–15 Uhr und </p>
                        <p>nach Vereinbarung</p>
                    </div>
                    <div class="footer__text">
                        <h3>Kontakt</h3>
                        <p>Schuhmanufaktur Formschön GmbH</p>
                        <p>Alte Bahnhofstraße 5a </p>
                        <p>53173 Bonn-Bad Godesberg </p>
                    </div>
                    <div class="footer-contact">
                        <div class="footer-contact__link">
                            <img class="footer-contact__icon" src="img/icon-phone.svg" alt="Mail Icon">
                            <a href="tel:0228-123450">Tel: 0228-123450</a>
                        </div>
                        <div class="footer-contact__link">
                            <img class="footer-contact__icon" src="img/icon-fax.svg" alt="Globe Icon">
                            <a href="tel:0228-123450">Fax: 0228-123459</a>
                        </div>
                        <div class="footer-contact__link">
                            <img class="footer-contact__icon" src="img/icon-mail.svg" alt="Mail Icon">
                            <a href="mailto:info@schuhmanufaktur-formschön.de">info@schuhmanufaktur-formschön.de</a>
                        </div>
                        <div class="footer-contact__link">
                            <img class="footer-contact__icon" src="img/icon-globe.svg" alt="Globe Icon">
                            <a href="https://www.schuhmanufaktur-formschön.de" target="_blank">www.schuhmanufaktur-formschön.de</a>
                        </div>
                    </div>
                </div>
                <div class="footer--bottom">
                    <div class="footer-contact__social">
                        <a href="https://www.youtube.com/" target="_blank"><img src="img/youtube.svg" alt="Youtube"></a>
                        <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.svg" alt="Instagram"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.svg" alt="Facebook"></a>
                        <a href="https://www.snapchat.com/" target="_blank"><img src="img/snapchat.svg" alt="snapchat"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--------------------------------------------
        JQuery JS - Quelle: https://bit.ly/3fELRq6
    ----------------------------------------->
    <script type = "text/javascript" src="js/jquery-3.6.0.min.js"></script>

    <!--------------------------------------------
            Bootstrap JS - Quelle: https://bit.ly/3uLcnCt
        ----------------------------------------->
    <script type = "text/javascript" src="js/bootstrap.bundle.min.js"></script>

    <script>

        /*  Zeigt die aus der accessoires.php Datei gepostete summierte Preis Variable an und setze sie im
            Hidden Input als Value  */
        function total_price(){
            var price = document.getElementById("total_price");
            var sum_input = document.getElementById("sum");
            var sumJS = "Der Gesamtpreis beträgt: <span class=\"vollkorn-semibold\"> <?php echo $sum; ?></span>";
            var sumJSinput = <?php echo $sum; ?>;
            price.innerHTML = sumJS;
            sum_input.value = sumJSinput;
        }
        total_price();

    </script>
</body>
</html>