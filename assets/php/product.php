<?php
session_start();
    $id = $_SESSION['id'] ;
    $t = $_SESSION['title'] ;
    $d =  $_SESSION['discription'];
   $p = $_SESSION['price'] ;
   $i = $_SESSION['image'];

  class Product{
        public $id;
        public $title;
        public $disc;
        public $price;
        public $img;
        
   function __construct($id,$title,$disc,$price,$img)
        {
          $this->id = $id;
          $this->title = $title;
          $this->disc = $disc;
          $this->price = $price;
          $this->img = $img;
        }
  

 }

 $product = new Product($id,$t,$d,$p,$i);


 $arr[]=$product;
 $inp = file_get_contents('data.json');
 $tempArray = json_decode($inp, true);
array_push($tempArray, $arr);
$jsonData = json_encode($tempArray);
file_put_contents('data.json', $jsonData);
header("Location: prodlist.php");

//  foreach ($product as $key => $value) {
//  array_push($arr, $value);
//   }
  
// $json = json_encode(array($id => $arr));

// file_put_contents("data.json", $json);



?>