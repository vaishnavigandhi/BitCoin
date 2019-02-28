<?php
  include "header.php";
  require "rb-mysql.php";
  session_start();

  R::setup("mysql:host=localhost;dbname=blockchain","root", "root");


  $blockdata  = R::find("chaindata","id=1");
  
    foreach($blockdata as $i1){
      $firstN = $i1["nonce"];
     $firstP = $i1["previoushash"];
      $firstH = $i1["newhash"]; 

      }
  $blockdata  = R::find("chaindata","id=2");
 
    foreach($blockdata as $i1){
      $secondN = $i1["nonce"];
     $secondP = $i1["previoushash"];
      $secondH = $i1["newhash"]; 

      }

  $blockdata  = R::find("chaindata","id=3");
    
    foreach($blockdata as $i1){
      $thirdN = $i1["nonce"];
     $thirdP = $i1["previoushash"];
      $thirdH = $i1["newhash"]; 

      }

  $blockdata  = R::find("chaindata","id=4");
  
   
    foreach($blockdata as $i1){
      $fourthN = $i1["nonce"];
     $fourthP = $i1["previoushash"];
      $fourthH = $i1["newhash"]; 

      }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
         $x2 = $_POST["nonce2"];
         //echo $x2."<br>";
        $y2 = "cfcd208495d565ef66e7dff9f98764da";
        // $_SESSION["hash"]=$y2;
        //echo $y2."<br>";

       $h = md5($y2.$x2);
      //echo $h;

      $x3 = $_POST["nonce3"];
      $j3 = $_POST["Final_hash2"];

     // echo "<br>".$x3."<br>";
      $y3 = $h;

      $h3 = md5($y3.$x3);
      echo "Original second Hash::".$h3."<br>";

      $h4 = md5($j3.$x3);
      echo "After editing second hash::".$h4."<br>";

      if($h3==$h4){
        echo "SECOND VALID HASH!"."<br>"."<br>";
      }
      else{
        echo "SECOND INVALID HASH!"."<br>"."<br>";
      }
    
      $x4 = $_POST["nonce4"];
      $y4 = $_POST["Final_hash3"];

      $h5 = md5($y4.$x4);
      echo "Original third Hash::".$h5."<br>";

      $h6 = md5($h4.$x4);
      echo "After editing third hash::".$h6."<br>";

      if($h5==$h6){
        echo "THRID VALID HASH!"."<br>";
      }
      else{
        echo "THIRD INVALID HASH!"."<br>"."<br>";
      }


}

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//  //first Block  
//    $N1 = $_POST["nonce1"];
//    $P1 = $_POST["previous_hash1"];
//    $H1 = $_POST["Final_hash1"];

//   $temphash = md5($P1.$N1);
//   echo $temphash."";

//   $blockdata  = R::find("chaindata","id=1");
  
//     foreach($blockdata as $i1){
//      $firstN = $i1["nonce"];
//      $firstP = $i1["previoushash"];
//      $firstH = $i1["newhash"]; 

//      $tempdbhash = md5($firstN.$firstH);
//   echo $tempdbhash;
//       }

      
//       // if(($N1==$firstN)&&($P1==$firstP)&&($H1==$firstH)){
//       //   echo "matched!!";

//       //  $_SESSION["color"]="white";

//       // }else{
//       //   echo "not";
//       //   $_SESSION["color"]="red";
//       // }


// // //second block
// //   echo $N2 = $_POST["nonce2"];
// //   echo $P2 = $_POST["previous_hash2"];
// //   echo $H2 = $_POST["Final_hash2"];

// //   $blockdata  = R::find("chaindata","id=2");
  
// //     foreach($blockdata as $i1){
// //     echo $secondN = $i1["nonce"];
// //     echo $secondP = $i1["previoushash"];
// //     echo $secondH = $i1["newhash"]; 

// //       }
// //       if(($N2==$secondN)&&($P2==$secondP)&&($H2==$secondH)){
// //         echo "matched!!";

// //        $_SESSION["color2"]="white";

// //       }else{
// //         echo "not";
// //         $_SESSION["color2"]="red";
// //       }

// // //third block
// //   echo $N3 = $_POST["nonce3"];
// //   echo $P3 = $_POST["previous_hash3"];
// //   echo $H3 = $_POST["Final_hash3"];

// //   $blockdata  = R::find("chaindata","id=3");
  
// //     foreach($blockdata as $i1){
// //     echo $thirdN = $i1["nonce"];
// //     echo $thirdP = $i1["previoushash"];
// //     echo $thirdH = $i1["newhash"]; 

// //       }
// //       if(($N3==$thirdN)&&($P3==$thirdP)&&($H3==$thirdH)){
// //         echo "matched!!";

// //        $_SESSION["color3"]="white";

// //       }else{
// //         echo "not";
// //         $_SESSION["color3"]="red";
// //       }


// }
  

?>
<style type="text/css">
     #header {
        text-align: center;
        color: blue;
        font-size: 20px;
     
    </style>
  </script>
<script src="js/md5.min.js"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

<form action="changes.php" method="POST">
<div class="container">
  <div class="columns">
    <div class="column is-4 is-offset-4">

      <h1 id="header" class="vote header">MAKE CHANGES!!</h1>
      
<!--second form-->
            
        <div class="field">
          <label class="label">Nonces</label>
          <div class="control">
            <input class="input" type="text" id="nonces" name="nonce2" value="<?php echo $secondN ?>" readonly>
          </div>
        </div>
        <div class="field">
          <label class="label">Previous Hash</label>
          <div class="control">
            <input class="input" type="text" id = 'previous_hash' name="previous_hash2" value="<?php echo $secondP ?>" readonly>
          </div>
        </div>
        <div class="field">
          <label class="label">Final Hash</label>
          <div class="control">
            <input class="input" type="text" id ="final_hash"  name="Final_hash2" value="<?php echo $secondH ?>">
          </div>
        </div>
     
        <div class="field">
          <div class="control">
           
          </div>

        </div>
      <br><br>

<!--third form-->
            
        <div class="field">
          <label class="label">Nonces</label>
          <div class="control">
            <input class="input" type="text" id="nonces" name="nonce3" value="<?php echo $thirdN ?>" readonly>
          </div>
        </div>
        <div class="field">
          <label class="label">Previous Hash</label>
          <div class="control">
            <input class="input" type="text" id = 'previous_hash' name="previous_hash3"  value="<?php echo $thirdP ?>" readonly>
          </div>
        </div>
        <div class="field">
          <label class="label">Final Hash</label>
          <div class="control">
            <input class="input" type="text" id ="final_hash"  name="Final_hash3" value="<?php echo $thirdH ?>">
          </div>
        </div>

        
        <div class="field">
          <div class="control">
            

          </div>

        </div>
      <br><br>
<!--fourth form-->
            
        <div class="field">
          <label class="label">Nonces</label>
          <div class="control">
            <input class="input" type="text" id="nonces" name="nonce4" value="<?php echo $fourthN ?>" readonly>
          </div>
        </div>
        <div class="field">
          <label class="label">Previous Hash</label>
          <div class="control">
            <input class="input" type="text" id = 'previous_hash' name="previous_hash4"  value="<?php echo $fourthP ?>" readonly>
          </div>
        </div>
        <div class="field">
          <label class="label">Final Hash</label>
          <div class="control">
            <input class="input" type="text" id ="final_hash"  name="Final_hash4" value="<?php echo $fourthH ?>">
          </div>
        </div>


        
        <div class="field">
          <div class="control">
            

          </div>

        </div>
      
      <div class="field">
          <div class="control">
            <button class="button is-link">  Fix Changes!!   </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="mineHTML.php">BACK!!</a>
          </div>
        </div>

    </div> <!-- col-6 --> 
  </div> <!-- columns -->
</div>
</form>



