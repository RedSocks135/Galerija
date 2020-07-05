<?php
session_start();
$amount = 0;
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
foreach ($_SESSION['cart'] as $item) {
    $amount += $item['amount'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Istorijat slamarstva - Galerija suvenira od slame Tavankut</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="handmade straw souvenirs made by creative rural women">
    <meta name="keywords" content="tourism, souveniers, straw, rural lifestyle, straw art, straw artists, museums">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Nenad Vojnić, Dubravko Bilinović">
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header">
    <h1><a href="index.php">Galerija slika od slame</a></h1>
    <nav id="nav">
        <ul>
            <?php

            if (isset($_SESSION['custID'])) {
                echo '<li><a href="checkout.php"><i class="fa fa-shopping-cart"></i><span style="position: relative; right: -10px;background-color: #3ba666;border-radius: 50%;padding: 4px">'.$amount.'</span></a></li>';
                echo '<li>Prijavljeni ste kao <span style="color: #cee8d8;">'.$_SESSION['custUsername'].'</span></li>';
                echo '<li><a href="index.php">Početna</a></li>';
                echo '<li><a href="orders.php">Porudžbine</a></li>';
                echo '<li><a href="shop.php">Prodavnica</a></li>';
                echo '<li><a href="includes/logout_inc.php">Odjava</a></li>';}
            else {
                echo '<li><a href="index.php">Početna</a></li>
<li><a href="login.php">Prijava</a></li>
            <li><a href="register.php">Registracija</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>

<!-- Title -->
<section id="main" class="wrapper">
    <div class="container">

        <header class="major">
            <h2>Istorijat slamarstva</h2>
            <p>Kako je sve počelo?</p>
        </header>
    </div>
</section>

<hr style='border: 1px #c3c3c3 solid;'>

<!-- Main -->
<section id="two" class="wrapper style2 align-center">
    <div class="container">
        <div class="row">
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/rit.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Ana Milodanović, "Rit", slama, 1962.</h3>
                <p style="text-align: justify">Likovna zbivanja u Subotici, počevši od prvih izložbi odmah nakon završetka Drugog svjetskog rata i Kursa figuralnog crtanja koji je vodio slikar Andraš Hanđa, bila su brojna i značajna za kulturu ovoga grada. Istaknuti subotički likovni umjetnici uključili su se u likovne kolonije u Senti, Bačkoj Topoli, Zrenjaninu i u drugim gradovima u Vojvodini, a slikari amateri i još neafirmirani slikari i kipari organizirali su se na lokalnoj razini. Takva organizacija bila je i Likovna sekcija pri Radničkom univerzitetu u Subotici. Kasnije se stvaraju i druge likovne grupe i kolonije "Čurgo" , "Boš x Boš" i druge.

                    Grupa slikara članova Likovne sekcije pri Radničkom univerzitetu u Subotici - Lajoš Đurči, Ludvig Laslo, Lajčo Evetović, Žarko Rafajlović i Stipan Šabić, nezadovoljni radom u toj likovnoj sekciji odlučuje se osnovati slikarsku grupu u nekom naselju gdje bi mogli odlaziti i raditi. Odabrali su Tavankut i 17. rujna 1961. godine pri Osnovnoj školi "Matija Gubec" u Tavankutu osnovali su Likovnu koloniju "Grupa Šestorice".

                    Osnivači Likovne kolonije "Grupa šestorice" bili su: Stipan Šabić, nastavnik likovnog odgoja, tada direktor OŠ "Matija Gubec" u Tavankutu, Ivan Jandrić, nastavnik likovnog odgoja u toj školi, te Lajoš Đurči, Ludvig Laslo, Lajčo Evetović i Žarko Rafajlović.

                    Osnivanje Likovne kolonije "Grupa šestorice" u Tavankutu pratili su i pomagali mnogi i tako su se s osnivačima toga dana našli u društvu Ivan Prćić Gospodar i Petro Stantić iz Tavankuta, Marko Vuković, slikar iz Subotice, koji se kasnije pridružio koloniji, Ivan Pančić, pjesnik iz Subotice, Lajčo Vidaković, tada tajnik Zajednice kulture u Subotici i Naco Zelić iz Subotice.

                    "Grupi šestorice" ubrzo se pridružilo više ljubitelja likovnih umjetnosti iz Tavankuta - Marga Stipić, Cilika Dulić (kasnije s prezimenom Dulić - Kasiba) i drugi, a idućih godina i ljubitelji likovnih umjetnosti iz Subotice i iz okolnih naselja - Žednika, Đurđina, Male Bosne i Bikova.</p>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/zetva.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Ana Milodanović, "Žetva", slama, 1967.</h3>
                <p style="text-align: justify">Slamrke su stvorile bogatu izvornu likovnu umetnost, koja se temelji na bunjevačkoj narodnoj tradiciji pletenja slame vezanog za bunjevački narodni običaj proslave završetka žetve pšenice (žita) pod imenom "Dužijanca" i "Dožejanca". Tako se došlo do slikarskih ostvarenja sestara Ane, Đule i Teze Milodanović iz Žednika, Kate Rogić, Mare Ivković Ivandekić, Matije Dulić i Ruške Poljaković iz Đurđina, Marge Stipić, Anice Balažević, Ane Crnković i Marije Vojnić iz Tavankuta, Teze Vilov s Bikova i Ruže Sarić, Jozefine Skenderović i Emine Sarić iz Subotice i drugih.

                    Slični nagoni i uvjetovanosti doveli su i do slikarskih ostvarenja naivnih slikarica Cilike Dulić - Kasiba i Marge Stipić iz Tavankuta, Jele Cvijanov iz Male Bosne, Nine Poljaković i Ane Skenderović iz Đurđina i drugih.

                    Ana Milodanović je na prvoj izložbi Likovne kolonije "Grupa šestorice" održanoj u Tavankutu 10. ožujka 1962. godine pod nazivom "KOLONIJA AMATERA SLIKARA TAVANKUT" izložila dva rada od slame i to već ranije (1961.) izrađenu maketu crkve Sv. Marka u Starom Žedniku i prvu sliku od slame, pejsaž jednog rita, tada pod imenom "Voda i sunce", a kasnije evidentiranu pod imenom "Rit". Za slijedeću izložbu otvorenu u Tavankutu 23. ožujka 1963. godine Ana Milodanović je izradila novu sliku od slame "Sova na đermi".

                    I Anine sestre Teza i Đula Milodanović i Kata Rogić i Mara Ivković Ivandekić i druge poznate pletilje perlica, ornamenata i kruna od žitne slame za proslave Dužijance i u mjesnim crkvama u Žedniku, Đurđinu, Tavankutu, Maloj Bosni i drugim i u katedralnoj crkvi u Subotici, uključivši se u Likovnu koloniju, prvo su se pojavile s etnografskim materijalom (dijademe, perlice, krune i vjerski simboli), a tek kasnije javile su se slikama od slame.</p>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/crown.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Kata Rogić, kruna za proslavu Dužijance u katedrali Svete Terezije Avilske u Subotici, 1976.</h3>
                <p style="text-align: justify">Zbog vremena u kojem smo tada živjeli manje su poznati radovi slikarica slamarki s vjerskom tematikom, različiti vjerski simboli ispleteni za vjerske svečanosti i za druge prigode, od kojih se pojedini nalaze u Vatikanu u Rimu, u Biskupiji u Subotici i u drugim crkvenim i drugim institucijama. Treba osobito ukazati na radove Ane Milodanović, Kate Rogić, Mare Ivković Ivandekić i Teze Milodanović. Ana Milodanović je izradila više od 30 radova s vjerskom tematikom - Kalež (1956.), Jaganjac na knjizi (1957.), Sveto Trojstvo (1958.), Pokaznica (1959.) i još mnoge sve do Maslinske gore, koju je izradila 1968. godine "za svoju dušu" i čuva je u svom domu. U Vatikanskom trezoru u Rimu čuva se Tijara pape Ivana XXIII., koju je izradila 1963. godine. U Biskupiji u Subotici čuva se pokaznica (1959.), grb (1961.) mitra i štap biskupa Matiše Zvekanovića (1963.), globus s kupolom crkve sv. Petra u Rimu (1964.) i drugi radovi, a u Zagrebačkoj katedrali čuva se grb nadbiskupa Alojzija Stepinca (1960.). Kata Rogić i Mara Ivković Ivandekić izradile su brojne radove s vjerskom tematikom: grb sv. Terezije Avilske, zaštitnice Subotičke katedrale u spomen 400. godišnjice njezine smrti, sliku sv. Franje Asiškog u spomen 800. obljetnice njegovog rođenja, grb kardinala Franje Kuharića, krunu kraljice Jelene Solinske, maketu Višeslavove krstionice, grb pape Pavla VI. koji mu je Kata Rogić darovala prigodom susreta u Rimu u lipnju 1976. godine, a čuva se u Vatikanskom trezoru u Rimu, grb biskupa Lajče Budanovića, franjevački grb, karmelski grb i druge radove koji se čuvaju u Biskupijskom muzeju u Subotici, u Župskom muzeju u Đurđinu i u drugim muzejima i galerijama. U Veleposlanstvu Vatikana u Beogradu čuva se grb države Vatikan koji je izradila Mara Ivković Ivandekić. U Biskupijskom muzeju u Subotici, u Župi sv. Marka u Starom Žedniku i u drugim ustanovama čuva se više radova s vjerskom tematikom koje je izradila Teza Milodanović.</p>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/duga.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Teza Milodanović, "Duga", slama, 1968.</h3>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/jarebice.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Teza Vilov, "Jerebice", slama, 1970.</h3>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/vinac.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Matija Dulić,"Pletenje vinca", slama, 1971.</h3>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/spremanje.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Rozalija Sarić, "Spremanje", slama, 1971.</h3>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/vitrenjaca.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Marija Vojnić, "Vitrenjača", slama, 1988.</h3>
            </section>
            <section class="feature 12u 12u(small)">
                <img class="image fit" src="images/kolo.jpg" style="border-radius: 30px" alt="Rit" />
                <h3>Anica Balažević, "Momačko kolo", slama, 1989.</h3>
            </section>
        </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <section class="4u$ 12u$(medium) 12u$(small)">
                <h3>Kontaktirajte nas:</h3>
                <ul class="icons">
                    <li><a href="https://www.facebook.com/Galerija-Prve-kolonije-naive-u-tehnici-slame-1651640418409676/?ref=page_internal" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
                </ul>
                <ul class="tabular">
                    <li>
                        <h3>Adresa</h3>
                        Marka Oreškovića 3<br>
                        24214 Donji Tavankut, Srbija
                    </li>
                    <li>
                        <h3>Mail</h3>
                        galerijatavankut@gmail.com
                    </li>
                    <li>
                        <h3>Telefon</h3>
                        064 1484144
                    </li>
                </ul>
            </section>
</footer>

</body>
</html>

