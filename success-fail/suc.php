<?php

session_start();
//echo "success page";
?>



<script src="js/md5.min.js"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">

<div class="container">
  <div class="columns">
    <div class="column is-4 is-offset-4">

    	<form action="mineHTML.php" method="POST">
      <br><br><br><br><br>
      <article class="message is-success">
  <div class="message-header">
    <p>Success</p>
    <button class="delete" aria-label="delete"></button>
  </div>
  <div class="message-body">
  	<?php echo $_SESSION["email"]."<br>"."You have successfully mine the block!!! yuppii!!!"."<br>"."<br>"?>
  	<?php echo "Generated Hash"."<br>".$_SESSION["final_hash"]."<br>"."<br>";?>
  	<?php echo "you win ".$_SESSION["bitcoin"]."!!";?> 
    <!-- <?php //echo $_SESSION["bitcoin"]."<br>".echo $_SESSION["final_hash"];  ?> -->
  </div>
</article>
	<button class="button is-link">Play Game Again!!</button>
    </div>  <!-- col-6 -->
  </div> <!-- columns -->
</div>

