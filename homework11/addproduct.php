<?php 
	require 'functions.php';
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
	<div class="container">
		<form action="requests.php" method="post" enctype="multipart/form-data">

			<h3>Avelacnel product</h3>

			<div class="errorsCont" ><input type="text" name="prod_name" placeholder="apranqi anvanum@"></div>
			<div class="errorsCont" ><input type="text" name="prod_price" placeholder="apranqi gin@"></div>

			<div class="moreDetalsInput" ><p>Apranqi qanak</p><div class="countButtons"><span class="count down">-</span><input type="text" class="quantity" value="1" name="prod_quantity"><span class="count up">+</span></div></div>

			<div class="moreDetalsInput" ><p>Apranqi nkar</p><input type="file" name="prod_img"></div>

			<textarea  cols="30" rows="10" placeholder="apranqi nkaragrutyun" name="prod_short_description"></textarea>

			<input type="hidden" name="prod_id" value="<?php echo(count(getItems())+1);?>">

			<input type="submit" name="addProducts" value="Avelacnel">
			
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>