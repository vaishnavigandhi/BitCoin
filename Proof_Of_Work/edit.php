<?php

echo "edit";
  require "rb-mysql.php";

  R::setup("mysql:host=localhost;dbname=blockchain","root", "root");
  
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 //first Block	
 	echo $N1 = $_POST["nonce1"];
 	echo $P1 = $_POST["previous_hash1"];
 	echo $H1 = $_POST["Final_hash1"];

 	$blockdata  = R::find("chaindata","id=1");
  
    foreach($blockdata as $i1){
    echo $firstN = $i1["nonce"];
    echo $firstP = $i1["previoushash"];
    echo $firstH = $i1["newhash"]; 

      }
      if(($N1==$firstN)&&($P1==$firstP)&&($H1==$firstH)){
        echo "matched!!";
      }else{
        echo "not";
      }

      
//second block

 	 $N2 = $_POST["nonce2"];
 	 $P2 = $_POST["previous_hash2"];
 	 $H2 = $_POST["Final_hash2"];

$blockdata  = R::find("chaindata","id=2");
 
    foreach($blockdata as $i1){
      $secondN = $i1["nonce"];
     $secondP = $i1["previoushash"];
     $secondH = $i1["newhash"]; 

     
      }




// //third block

//  	echo $N3 = $_POST["nounce3"]."<br>";
//  	echo $P3 = $_POST["previous_hash3"]."<br>";
//  	echo $H3 = $_POST["Final_hash3"]."<br>";

// $blockdata  = R::find("block","id=3");
    
//     foreach($blockdata as $i1){
//     echo  $thirdN = $i1["nounce"];
//     echo $thirdP = $i1["previoushash"];
//      echo $thirdH = $i1["newhash"]; 

//       }

//       if(($thirdP===$P3)&&($thirdN===$N3)){
//       	echo $N3."match...".$P3;
//       }else{
//       	echo "not-matched";
//       }


// //fourth block

//  	echo $N3 = $_POST["nounce4"]."<br>";
//  	echo $P4 = $_POST["previous_hash4"]."<br>";
//  	echo $H4 = $_POST["Final_hash4"];
 	
//  	$blockdata  = R::find("block","id=4");
  
   
//     foreach($blockdata as $i1){
//    echo   $fourthN = $i1["nounce"];
//     echo $fourthP = $i1["previoushash"];
//      echo $fourthH = $i1["newhash"]; 

//       }

//       if(($fourthP===$P4)&&($fourthN===$N4)){
//       	echo $N4."match...".$P4;
//       }else{
//       	echo "not-matched";
//       }


 
 }

  
?>




