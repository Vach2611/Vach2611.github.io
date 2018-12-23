<?php 
	
	require "functions.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	<div class="mainBtn exitBtn" ><a href="index.php">Veradarnal glxavor Ej</a></div>
	<main>
	<?php 
			$allProducts = getItems();
			$prod = new Product($allProducts[$_GET["id"]-1]->prodName,$allProducts[$_GET["id"]-1]->prodPrice,$allProducts[$_GET["id"]-1]->prodImageURL,$allProducts[$_GET["id"]-1]->prodQuantity,$allProducts[$_GET["id"]-1]->prodShortDescription,$allProducts[$_GET["id"]-1]->prodID);
			$prod->printProduct();


	?>
</main>


</body>
</html>