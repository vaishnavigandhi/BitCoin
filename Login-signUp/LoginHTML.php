<?php
		include "header.php";


?>

<script src="js/md5.min.js"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

<div class="container">
  <div class="columns">
    <div class="column is-4 is-offset-4">

      <h1 class="vote header"> LOGIN!!</h1>

      <form action="loginPHP.php" method="POST">
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
           
            <button class="button is-link">Login!!</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="signup.php">Sign up!!!</a>
          </div>

        </div>
      </form>

    </div>  <!-- col-6 -->
  </div> <!-- columns -->
</div>



