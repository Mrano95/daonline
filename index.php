<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
         integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
        <title>Home</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/global.css" rel="stylesheet">
    </head>

  <body>
    <?php
        include 'components/menu.html';
        include 'components/header.html';
    ?>
    <div class="seperator col-12"></div>
    <main role="main" class="container">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="content-title">
                            <p><h1>Welkom bij de Drentse Academie</h1></p>
                        </div>
                        <p>De Drentse Academie is een jonge en frisse academie waar studenten, docenten, onderzoekers en professionals uit het werkveld samen werken aan het oplossen van vraagstukken uit de samenleving. Op de Drentse Academie wordt de focus gelegd op informatica en werktuigbouwkunde opleidingen. Binnen deze opleidingen bied de Drentse Academie haar studenten de mogelijkheid om een keuze te maken uit verschillende afstudeerrichtingen. De Drentse Academie is een kleinschalige opleiding die trots is op haar unieke manier van kennisoverdracht. Dankzij de kleinschaligheid van de opleiding blink de Drentse Academie uit op het gebied van individuele begeleiding. Als student ben je bij ons geen nummer maar een persoon.</p>
                    </div>
                    <div class="col-sm-12 col-md-7 mt-auto mb-auto">
                        <div class="content-img">
                            <img src="images/school.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="content-subtitle">
                            <p><h2>Informatica</h2></p>
                        </div>
                        <p>De Informatica opleiding aan de Drentse Academie heeft een state-of-the art atelier: het Internet of Things Lab (IoT Lab). Een studieomgeving voorzien van de nieuwste innovatieve technologie, zoals een Microsoft Surface Hub, Virtual Reality apparaten en robots. Naast dit atelier beschikt de opleiding ook over MyConcept, een Fabrication Lab. Daar kunnen studenten hun ideeen verwezenlijken door ze te printen op een van de vele 3D-printers, of middels lasersnijden.</p>
                        <p>Binnen de Informatica opleiding biedt de Drentse Academie verschillende afstudeeropties. Deze afstudeeropties zijn: ICT-beheer, software engineering, technische informatica en front end development.</p>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="content-subtitle">
                            <p><h2>Werktuigbouwkunde</h2></p>
                        </div>
                        <p>In de opleiding Werktuigbouwkunde leer je alles over werktuigbouwkundige toepassingen. Het is een uitdaging om nieuwe producten of productiesystemen te ontwerpen. Daarbij doet de opleiding een beroep op je creativiteit en je technische en organisatorische vermogen. Je leert nieuwe producten en productiesystemen ontwerpen, ontwikkelen en maken.</p>
                        <p>Binnen de Werktuigbouwkunde opleiding biedt de Drentse Academie verschillende afstudeeropties. Deze afstudeeropties zijn: off-shore, scheepsbouw, machine bouw en staal en constructie.</p>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function lang_func()
            {
                var lang = document.getElementById("lang_sel").value;
                window.location = lang;
                console.log(lang);
            }
    </script>
  </body>
</html>
