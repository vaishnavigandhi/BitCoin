<?php
include('blockchainclass.php');
session_start();

require "rb-mysql.php";

  R::setup("mysql:host=localhost;dbname=blockchain","root", "root");

if($_SERVER["REQUEST_METHOD"]=="POST"){
   $nonce = $_POST["nonce"];
  $previous = $_POST["previous_hash"];
   

$h = md5($previous.$nonce);
echo $h;


$bitCoin = new BlockChain();
$bitCoin->push(new Block(1, "amount: 6"));

$bitCoin->push(new Block(1, "amount: 6"));
$bitCoin->push(new Block(1, "amount: 6"));
$bitCoin->push(new Block(1, "amount: 6"));
$bitCoin->push(new Block(1, "amount: 6"));
$bitCoin->push(new Block(1, "amount: 6"));
$bitCoin->push(new Block(1, "amount: 6"));
$bitCoin->push(new Block(1, "amount: 6"));

$encoded = json_encode($bitCoin, JSON_PRETTY_PRINT);

//echo $encoded;
print_r($encoded);

$fr=json_decode($encoded, true);
 //print_r($fr);
    // print_r($fr);
    for($i=0;$i<count($fr["chain"]);$i++){
      

       $dbnonce =  $fr["chain"][$i]["nonce"];
       echo "<br>"."Nonce-->".$nonce."<br>";
       $pHash =  $fr["chain"][$i]["previousHash"];
       echo "PreviousHash-->".$pHash."<br>";
       $final_hash =  $fr["chain"][$i]["hash"];
       echo "Final_hash-->".$final_hash."<br>";

       if(($pHash==$previous)&&($dbnonce==$nonce)){
          echo "matched!!";

          echo $nonce;
          $email = $_SESSION["email"];
          echo $email;
          //echo $previous;
          $x  = R::dispense("chaindata");

      // 2. set the column data for the rows
           $x->nonce = $dbnonce;
           $x->previoushash = $pHash;
            $x->newhash = $final_hash;

      // 3. save row to locations table
           R::store($x);

           $y  = R::dispense("miner");

      // 2. set the column data for the rows
           $y->email = $email;
           $y->nonce = $dbnonce;
           $y->previoushash = $pHash;
           $y->newhash = $final_hash;
           $y->bitcoin = 5;


      // 3. save row to locations table
           R::store($y);
           $_SESSION["bitcoin"] = 5;
           $_SESSION["final_hash"] = $final_hash;

         header("Location: suc.php");
         exit;

      //echo "signUp values successfully!!!";
         }else{
          header("Location: fail.php");
         }




       // }else{

       //    header("Location: fail.php");
       // }


    }  
      
  
   

// $data  = R::find("chainData","email='"."$username"."'" AND "password='"."$password"."'");
//   // $stores = R::getAll("select *from afterId where email='"."$username"."' AND password='"."$password"."'");
//   $flag = 0;
//   foreach($stores as $i1){
//     if($i1["email"]==$username && $i1["password"]==$password){
//        echo "<h1>successfull Login</h1>";
//       $flag++;
//       echo $i1["email"]."->".$i1["password"]."<br>";

//     }

      

//   }
//     // if($flag==1){
    //  header('Location: mineHTML.php');
    // }else {
    //  header('Location: loginHTML.php');
    // }


 
}
//require "rb-mysql.php";

//R::setup("mysql:host=localhost;dbname=store","root","root");


// $bitCoin = new BlockChain();


// $bitCoin->push(new Block(1, "amount: 6"));


// $bitCoin->push(new Block(2, "amount: 10"));
// //$bitCoin->push(new Block(3, "amount: 101"));
//  //$bitCoin->push(new Block(4, "amount: 102"));
// // $bitCoin->push(new Block(5, "amount: 103"));
// // $bitCoin->push(new Block(6, "amount: 104"));
// // $bitCoin->push(new Block(7, "amount: 105"));
// $encoded = json_encode($bitCoin, JSON_PRETTY_PRINT);

// //echo $encoded;
// print_r($encoded);


//  $fr=json_decode($encoded, true);
//  //print_r($fr);
//     // print_r($fr);
//     for($i=0;$i<4;$i++){
//      $nonce =  $fr["chain"][$i]["nonce"];
//        echo "<br>"."Nonce-->".$nonce."<br>";
//        $pHash =  $fr["chain"][$i]["previousHash"];
//        echo "PreviousHash-->".$pHash."<br>";
//        $final_hash =  $fr["chain"][$i]["hash"];
//        echo "Final_hash-->".$final_hash."<br>";
//     }  
      


?>