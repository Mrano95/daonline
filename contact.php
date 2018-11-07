<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
     integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <title>Contact</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/global.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
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
                    <div class="col-xl-6 col-sm-6">
                    	<h1>Neem contact op</h1>
                    	<form id="subscription_form" class="form-horizontal" action="bedankt.php" method="post">
			            <!-- Name input-->
			            <div class="form-group">
			              <label class="control-label" for="name">naam</label>
			              <div class="col-sm-9">
			                <input id="name" name="name" type="text" placeholder="je naam" class="form-control">
			              </div>
			            </div>
			            <!-- Email input-->
			            <div class="form-group">
			              <label class="control-label" for="email">E-mail</label>
			              <div class="col-sm-9">
			                <input id="email" name="email" type="text" placeholder="je email" class="form-control">
			              </div>
			            </div>
			            <!-- Message body -->
			            <div class="form-group">
			              <label class="control-label" for="message">Je bericht</label>
			              <div class="col-sm-9">
			                <textarea class="form-control" id="message" name="message" placeholder="laat hier je bericht achter..." rows="5"></textarea>
			              </div>
			            </div>

			            <p>Ik meld me aan voor de volgende opleiding(en)</p>
			            <p><i>Werktuigbouwkunde :</i></p>
			            <div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id="off-shore" value="off_shore">
						  <label class="custom-control-label" for="off-shore">Off-shore</label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id="scheepsbouw" value="scheepsbouw">
						  <label class="custom-control-label" for="scheepsbouw">Scheepsbouw</label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id="machine bouw" value="machine_bouw">
						  <label class="custom-control-label" for="machine bouw">Machine bouw</label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id="staal en constructie" value="staal_en_constructie">
						  <label class="custom-control-label" for="staal en constructie">Staal en Constructie</label>
						</div>
						<p><i>Informatica :</i></p>
						<div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id="ICT-beheer" value="ict_beheer">
						  <label class="custom-control-label" for="ICT-beheer">ICT-beheer</label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id="Software engineering" value="software_engineer">
						  <label class="custom-control-label" for="Software engineering">Software engineering</label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id=" technische informatica" value="technische_informatica">
						  <label class="custom-control-label" for=" technische informatica"> Technische Informatica</label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input name="course[]" type="checkbox" class="custom-control-input" id="front end development" value="front_end_development">
						  <label class="custom-control-label" for="front end development">Front end Development</label>
						</div>
			            <!-- Form actions -->
			            <div class="form-group">			              
			               <input name="submit"  type="submit" class="btn btn-primary btn-lg" value="inschrijven"></input>			              
			            </div>
			          </form>

                    </div>

                    <div class="col-xl-6 col-sm-6">
                    	 <div class="content-img">
                            <img src="images/school.jpg" class="img-fluid">
                        </div>
                    </div>

                    <div class="content-title">
                    	<div class="container">
							<div class="row">
						      <div class="col-sm-5 col-sm-offset-3">
						        <div class="well well-sm">
						          
						        </div>
						      </div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- /.container -->
    <?php include "components/footer.html" ?>
  </body>
</html>
