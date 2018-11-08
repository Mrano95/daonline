<?php
	session_start();
	if(!isset($_SESSION['login']))//check of login sessie is gestart en of je dus deze pagina mag gebruiken.
	{
		header('Location: login.php');
	}
	else
	{
		session_destroy();//eidg sessie na uploaden zodat je opnieuw mag inloggen.
	}

	$filestored 		= getcwd();//gebruikt de pagina waar je nu op zit
	$uploadDirectory 	= "/images/uploaded/";
	$errors 			= ""; 
	$fileExtensions 	= ['jpeg','jpg','png'];
	$response			= "";
	
	if (isset($_POST['submit']) && strlen($_FILES['myfile']['name']))
	{		
			$fileName 		= $_FILES['myfile']['name'];
			$fileSize	 	= $_FILES['myfile']['size'];
			$fileTmpName  	= $_FILES['myfile']['tmp_name'];
			$fileType 		= $_FILES['myfile']['type'];
			$fileExtension 	= strtolower(explode('.',$fileName)[1]);//explode om file extetions te kunnen controleren
			$uploadPath 	= $filestored . $uploadDirectory . basename($fileName); 
			
			if (! in_array($fileExtension,$fileExtensions)) // check file extetions
			{
				$errors = "Het bestandsformaat is niet toegestaan. Upload graag een bestand met het  bestandsformaat JPG, JPEG, png.";
			}


			if (empty($errors)) 
			{
				$didUpload = move_uploaded_file($fileTmpName, $uploadPath);//upload file naar de folder
				if ($didUpload) 
				{
					$response = "De afbeelding " . basename($fileName) . " is geupload.";
				} 
				else 
				{
					$response="Er is ergens een error opgetreden, probeer het opnieuw of neem contact op met de beheerder.";
				}
			} 
	}
	
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Upload</title>
	</head>
	
	<body>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		    <p>Select image to upload:
            <input type="file" name="myfile" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit"></p>
		</form>
		<?php
			echo $response;
			echo $errors;
		?>
	</body>
</html>
