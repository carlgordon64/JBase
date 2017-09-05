<?php
class product{

	var $productID;
var $productname;
var $productdesc;
var $productprice;

function __construct($new_pID,$new_pNm,$new_pDesc,$new_pPrice){

$this->productname = $new_pNm;
$this->productdesc = $new_pDesc;
$this->productID = $new_pID;
$this->productprice = $new_pPrice;

	}
	//retrieve username
	function get_productName(){
return $this->productname;
  }
  	//retrieve ID
	function get_productID(){
return $this->productID;
  }
  	//retrieve Description
	function get_productDesc(){
return $this->productdesc;
  }
  //retrieve Description
	function get_productPrice(){
return $this->productprice;
  }



}

class upsell1 extends product{

		function __construct($new_mem,$new_mem_password){

$this->username = $new_mem;
$this->password = $new_mem_password;
$this->status = $new_status;

	}


}




?>