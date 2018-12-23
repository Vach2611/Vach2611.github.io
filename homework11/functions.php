<?php 

	require_once "product.php";

	function getItems(){
		if (file_exists("text/users.txt") && filesize("text/users.txt")>0) {

			$file = fopen("text/users.txt", "r");
			$content = fread($file, filesize("text/users.txt"));
			return (Array)json_decode($content); // (Array) - ?
		}
		else{
			return array();
		}

	}


	function addItemToFile($product){
		$products = getItems(); 
		// chi katarvum enqan minchev getItems@ chkatarvi
		$products[] = $product;
		if (!file_exists("text")) {
			mkdir("text");
		}
		$file = fopen("text/users.txt", "w");
		fwrite($file, json_encode($products));
		header("Location:addproduct.php");
		exit;
	}


	
	function init(){



		$allProducts = getItems();

			if (count($allProducts)>0) {
				
			

				foreach ($allProducts as $product) {
					$prods = new Product($product->prodName,$product->prodPrice,$product->prodImageURL,$product->prodQuantity,$product->prodShortDescription,$product->prodID);
				}

				
				
				echo "<div class='prodCards'>";
				for($j=($_GET["page"]-1)*5;$j<($_GET["page"]-1)*5+5;$j++){

					if (!empty($allProducts[$j])) {

						$prods = new Product($allProducts[$j]->prodName,$allProducts[$j]->prodPrice,$allProducts[$j]->prodImageURL,$allProducts[$j]->prodQuantity,$allProducts[$j]->prodShortDescription,$allProducts[$j]->prodID);

						$prods->printProduct();
					}
				}
				echo "</div>";
				echo "<div class='pagination'>";
				$pageNum = ceil(count($allProducts)/5);
				for($i = 1; $i<=$pageNum;$i++){
					$classActive = ($_GET["page"]==$i)?"class='active'":'';
					echo "<div class='pageNum'><a $classActive href='http://localhost/vachik/homework11/productslist.php?page=".$i."'>".$i."</a></div>";
				}
				echo "</div>";
				


		}else{
			echo "Apranqner chkan";
		}


	} 









	
?>