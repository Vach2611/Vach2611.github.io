<?php 
	class Product{
		public $prodName;
		public $prodPrice;
		public $prodImageURL;
		public $prodQuantity;
		public $prodShortDescription;
		public $prodID;

		


		public function __construct($prodName,$prodPrice,$prodImageURL,$prodQuantity,$prodShortDescription,$prodID){
			$this->prodName = $prodName;
			$this->prodPrice = $prodPrice;
			$this->prodImageURL = $prodImageURL;
			$this->prodQuantity = $prodQuantity;
			$this->prodShortDescription = $prodShortDescription;
			$this->prodID = $prodID;

		}

		public function printProduct(){
			
			$htmlContent = "<div class='prodCard'>";
			$htmlContent .="<a href='http://localhost/vachik/homework11/currentproduct.php?id=".$this->prodID."'><img src='$this->prodImageURL'></a>";
			$htmlContent .="<h5 class='prodName'>".$this->prodName."</h5>";
			$htmlContent .="<p class='prodQuantity'>$this->prodQuantity hat</p>";
			$htmlContent .="<p class='prodPrice'>$this->prodPrice dram</p>";
			$htmlContent .="<p class='prodDescr' > $this->prodShortDescription</p>";
			$htmlContent .="</div>";
			echo $htmlContent;
			
		}
	}

?>