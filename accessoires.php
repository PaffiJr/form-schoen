<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessoires</title>

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
                    <div class="section-headline">
                        <h2>Accessoires</h2>
                        <hr class="line--headline-leistungen">
                        <h4>Schuhmanufaktur Formschön</h4>
                    </div>
                    <div class="form_wrapper">
                        <form action="bestellung.php" method="post">
                            <div class="artikel__list">
                                <div class="artikel__item">
                                    <label for="artikel1">
                                        <img src="img/schuhspanner.jpg" alt="Schuhspanner">
                                    </label>
                                    <div class="check__wrapper">
                                        <input type="checkbox" id="artikel1" name="artikel[]" value="69" onchange="update_total_price()">
                                        <div class="check__text">
                                            <h3>Schuhspanner</h3>
                                            <p>69€*</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="artikel__item">
                                    <label for="artikel2">
                                        <img src="img/guertel-braun.jpg" alt="Gürtel braun">
                                    </label>
                                    <div class="check__wrapper">
                                        <input type="checkbox" id="artikel2" name="artikel[]" value="99" onchange="update_total_price()">
                                        <div class="check__text">
                                            <h3>Herrengürtel Carlos Santos, <span class="lato-regular">braun</span></h3>
                                            <p>99€*</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="artikel__item">
                                    <label for="artikel3">
                                        <img src="img/guertel-schwarz.jpg" alt="Gürtel schwarz">
                                    </label>
                                    <div class="check__wrapper">
                                        <input type="checkbox" id="artikel3" name="artikel[]" value="99" onchange="update_total_price()">
                                        <div class="check__text">
                                            <h3>Herrengürtel Carlos Santos, <span class="lato-regular">schwarz</span></h3>
                                            <p>99€*</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="artikel__item">
                                    <label for="artikel4">
                                        <img src="img/socken.jpg" alt="Herren Socken">
                                    </label>
                                    <div class="check__wrapper">
                                        <input type="checkbox" id="artikel4" name="artikel[]" value="18.90" onchange="update_total_price()">
                                        <div class="check__text">
                                            <h3>Herrensocken Doré</h3>
                                            <p>18,90€*</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="artikel__item">
                                    <label for="artikel5">
                                        <img src="img/creme.jpg" alt="Pflegecreme">
                                    </label>
                                    <div class="check__wrapper">
                                        <input type="checkbox" id="artikel5" name="artikel[]" value="16.90" onchange="update_total_price()">
                                        <div class="check__text">
                                            <h3>Schuhpflege Saphir Shoe Wax</h3>
                                            <p>16,90€*</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__wrapper">
                                <p id="total_price"></p>
                                <input type="submit" value="Zum Bestellformular" class="header--jubiläum__btn btn--w3">
                                <input type="hidden" id="sum" name="sum" value="0">
                            </div>
                        </form>
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

    <!--------------------------------------------
            Skript - Dynamische Preis Errechnung
        ----------------------------------------->
    <script>

        /*  Prüft welche Checkboxen "gechecked" sind  und erstellt davon ein Array  */
        var checkboxen = Array.from(document.querySelectorAll('input[type="checkbox"]'));

        /*  Variable für das p-Tag wo der Wert geschrieben wird     */
        var price = document.getElementById("total_price");

        /*  Variable um den summierten Wert per Hidden Input ans Bestellformular übergibt   */
        var sum_input = document.getElementById("sum");

        /*  Errechnet den summierten Wert und schreibt ihn in das p-Tag und in das Hidden Input  */
        function update_total_price(){
            var sum = 0;
            for (var i = 0; i < checkboxen.length; i++){
                if (checkboxen[i].checked){
                    sum += parseFloat(checkboxen[i].value);
                }
            }
            /*  Schreibt den errechneten Wert in einen String um   */
            var sum_text = sum.toFixed(2).toString();
            /*  Füllt das <p>-Tag mit dem gewünschten Text und dem errechneten Gesamtpreis    */
            price.innerHTML = "Der Gesamtpreis beträgt: <span class=\"vollkorn-semibold\">" + sum_text + "</span>";
            /*  Füllt das Hidden Input mit dem errechneten Gesamtpreis    */
            sum_input.value = sum_text;
        }

        /*  Führt die Funktion einmal innital aus, danach immer per "onchange" an jeder Checkbox   */
        update_total_price();

    </script>
</body>
</html>