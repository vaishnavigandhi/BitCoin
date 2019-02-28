<?php

session_start();
//echo "fail page";
?>






<script src="js/md5.min.js"></script>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">

<div class="container">
  <div class="columns">
    <div class="column is-4 is-offset-4">

    <form action="mineHTML.php" method="POST">
      <br><br><br><br><br>
      <article class="message is-danger">
  <div class="message-header">
    <p>LOOSE</p>
    <button class="delete" aria-label="delete"></button>
  </div>
  <div class="message-body">
    <?php echo $_SESSION["email"]."<br>"."You have fail to mine the block!!!"."<br>"."<br>"?>
  </div>
</article>
<button class="button is-link">Try Again!!</button>
    </div>  <!-- col-6 -->
  </div> <!-- columns -->
</div>

