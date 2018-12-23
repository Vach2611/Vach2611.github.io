<?php 
	require "functions.php";

	if (isset($_POST["addProducts"])) {
		$prod_name = $_POST["prod_name"];
		$prod_price = $_POST["prod_price"];
		$prod_quantity = $_POST["prod_quantity"];
		$prod_Desc = $_POST["prod_short_description"];
		$prod_Id = $_POST["prod_id"];
		
		if ($_FILES["prod_img"]['size'] != 0){
	
		
			$file=$_FILES["prod_img"];

			$fileName = $file["name"];
			$fileError = $file["error"];
			$fileSize = $file["size"];
			$fileTMP = $file["tmp_name"];

			if ($fileError==0 && $fileSize<1000000000) {
				$fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
				$arr=array("png","jpg","jpeg");
				if (in_array($fileExtension, $arr)) {
				
					$newName = uniqid(true).".".$fileExtension;
					move_uploaded_file($fileTMP, "img/".$newName);
					$prod_img = "img/".$newName;
					
				} 
			}
		} 
		else{
			$prod_img = "img/prod.png";

		}




			$product1 = new Product($prod_name,$prod_price,$prod_img,$prod_quantity,$prod_Desc,$prod_Id);
			session_destroy();
			addItemToFile($product1);

		




	}
	



?>