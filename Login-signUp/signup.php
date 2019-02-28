<?php
		include "header.php";


		require "rb-mysql.php";

  R::setup("mysql:host=localhost;dbname=blockchain","root","root");


		if($_SERVER["REQUEST_METHOD"]=="POST"){
			//echo "hi";
			 $tempemail = $_POST["email"];
			 $temppassword = $_POST["password"];
			//echo $tempemail;
			//echo $temppassword;

			 $x  = R::dispense("data");

  // 2. set the column data for the rows
 			 $x->email = $tempemail;
  			 $x->password = $temppassword;
  

  // 3. save row to locations table
 			 R::store($x);

			//echo "signUp values successfully!!!";

			


		}
 //R::close();


?>

<script src="js/md5.min.js"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

<div class="container">
  <div class="columns">
    <div class="column is-4 is-offset-4">

      <h1 class="vote header"> Sign UP!!</h1>

      <form action="signup.php" method="POST">
        <div class="field">
          <label class="label">Enter Email</label>
          <div class="control">
            <input class="input" type="text" id="email" name="email">
          </div>
        </div>
        <div class="field">
          <label class="label">Enter Password</label>
          <div class="control">
            <input class="input" type="text" id ="password" name="password">
          </div>
        </div>
        
        
        <div class="field">
          <div class="control">
           
            <button class="button is-link">Save!!</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="LoginHTML.php">Back!!!</a>
          </div>

        </div>
      </form>

    </div>  <!-- col-6 -->
  </div> <!-- columns -->
</div>



