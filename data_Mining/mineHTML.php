<?php
  include "header.php";
require "rb-mysql.php";

  R::setup("mysql:host=localhost;dbname=blockchain","root", "root");




     $stores = R::getAll("select *from chaindata ORDER BY id DESC LIMIT 1");
  
  foreach($stores as $i1){
    
       //echo "<h1>successfull Login</h1>";
      //$flag++;
     $previous_hash = $i1["newhash"];
      //echo $i1["nonce"]."->".$i1["previoushash"]."<br>";

           
}

  

?>
<script src="js/md5.min.js"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">

<div class="container">
  <div class="columns">
    <div class="column is-4 is-offset-4">

      <h1 class="vote header"> Step 1:Enter Nonces and get rewards</h1>

      <form action="mineLogic.php" method="POST">
        <div class="field">
          <label class="label">Nonces</label>
          <div class="control">
            <input class="input" type="text" id="nonce" name="nonce">
          </div>
        </div>
        <div class="field">
          <label class="label">Previous Hash</label>
          <div class="control">
            <input class="input" type="text" id = 'previous_hash'  value="<?php echo $previous_hash; ?>" name="previous_hash">
          </div>
        </div>

        <!-- <div class="field">
          <label class="label">Final Hash</label>
          <div class="control">
            <input class="input" type="text" id ="final_hash"  name="Final_hash">
          </div>
        </div> -->

       <!--  <script>
            
            function myFunction() {
              var  textbox = document.getElementById('nounces').value;
              var result = document.getElementById('previous_hash');
              var final_hash = document.getElementById('final_hash');

              
//       final_hash.value ="<?php 
//  echo md5(textbox.value); 
      
// ?> ";
              <?php
                  $x //= textbox;
              ?>

              final_hash.value = textbox;
            }

        </script> -->
 

        
        <div class="field">
          <div class="control">
           
            <button class="button is-link">Mine!!</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="changes.php">CHANGES!!!</a>
          </div>

        </div>
      </form>
     

    </div>  <!-- col-6 -->
  </div> <!-- columns -->
</div>



