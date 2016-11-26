<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Upload</title>
	</head>
	<body>
		<form method="POST" enctype="multipart/form-data" action="upload.php">
			<input type="file" name="arquivo" />
			<input type="submit" />
		</form>

	</body>
</html>

<pre>
	<?php 
		//if($_FILES){
		//	print_r($_FILES);
		//}

		if($_FILES){
			$arqName = $_FILES["arquivo"]["name"];
			$name = explode(".",$arqName)[0];
			$ext = explode(".",$arqName)[1];
			$newName = md5($name.time()).".".$ext;
			echo $newName;

			if (!file_exists("uploads")) {
				mkdir("uploads");
				chmod("uploads", 0777);
			}

			move_uploaded_file($_FILES["arquivo"]["tmp_name"], "uploads/".$newName);


		}


	?>