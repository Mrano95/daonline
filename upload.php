<?php
		session_start();
		if(!isset($_SESSION['login']))
		{
			header('Location: login.php');
		}
		else
		{
		session_destroy();
		}
	
		$filestored 		= getcwd();
		$uploadDirectory 	= "/ikmages/uploaded/";
		$errors 			= ""; 
		$fileExtensions 	= ['jpeg','jpg','png'];
		$response			= "";
		
		if (isset($_POST['submit']) && strlen($_FILES['myfile']['name']))
		{		
				$fileName 		= $_FILES['myfile']['name'];
				$fileSize	 	= $_FILES['myfile']['size'];
				$fileTmpName  	= $_FILES['myfile']['tmp_name'];
				$fileType 		= $_FILES['myfile']['type'];
				$fileExtension 	= strtolower(explode('.',$fileName)[1]);
				$uploadPath 	= $filestored . $uploadDirectory . basename($fileName); 
				
				if (! in_array($fileExtension,$fileExtensions)) 
				{
					$errors = "Het bestandsformaat is niet toegestaan. Upload graag een bestand met het  bestandsformaat JPG, JPEG, png.";
				}


				if (empty($errors)) 
				{
					$didUpload = move_uploaded_file($fileTmpName, $uploadPath);
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
	</head>
	
	<body>
		<form action="gallerij.php" method="post" enctype="multipart/form-data">
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
