<!doctype html>
<?php
	//controleerd de tijd wanneer de foto is geupload.
	function mtimeuploaded($a, $b) 
	{
		$mtime_a = filemtime($a);//time waneer foto is geupload in sec.
		$mtime_b = filemtime($b);

		if($mtime_a == $mtime_b)
		{
			return 0;
		}
		elseif($mtime_a < $mtime_b)
		{
			return -1;
		}
		else
		{
			return 1;
		}
	}
	$filestored = "images/stored/";//map waar de images zijn opgeslagen.
	$images = glob($filestored."*.{jpg,gif,png}",GLOB_BRACE);//controle of het een jpg, jpeg of png is.
	usort($images, "mtimeuploaded");//sort de images via uitkomsten function.
	$images= array_reverse($images);//reversed array omdat de tijd eerst van langst naar kort wordt geupload. De array zorg ervoor dat de arry van korste upload naar langste gaat.
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
		 integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
		<title>Gallerij</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/global.css" rel="stylesheet">
		<link href="css/gallerij.css" rel="stylesheet">
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
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" >
						<?php		//echo de eerste 3 foto van de array in slideshow
							echo	'<div class="carousel-item active">
										<a href="'.$images[0].'" target="_blank"><img src="'.$images[0].'" alt="gallerij" class="img-fluid"></a>
									</div>';
						
							echo 	'<div class="carousel-item">
										<a href="'.$images[1].'" target="_blank"><img src="'.$images[1].'" alt="gallerij" class="img-fluid"></a>
									</div>';
						
							echo 	'<div class="carousel-item">
										<a href="'.$images[2].'" target="_blank"><img src="'.$images[2].'" alt="gallerij" class="img-fluid"></a>
									</div>';
						?>
					</div>
				</div>
                <div class="row">
					<?php
						foreach ($images as $image) 
						{	//echo alle fotos op volgorde van de array uit de stored folder.
							echo 	'<div class="col-6 col-sm-4 col-md-2 mt-2 mb-2">
										<div class="foto"> 
												<a href="'.$image.'" target="_blank"><img src="'.$image.'" alt="gallerij" class="img-fluid"></a>
										</div> 
									</div>';
						}
					?>
				</div>
            </div>
        </div>
    </main><!-- /.container -->
    <?php include 'components/footer.html'; ?>
  </body>
</html>
