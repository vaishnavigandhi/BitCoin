<?php

  require "rb-mysql.php";
  session_start();

  R::setup("mysql:host=localhost;dbname=blockchain","root", "root");
  

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username = $_POST["email"];

  $_SESSION["email"]=$username;

	$password = $_POST["password"];

	//echo "Welcome,".$username."<br>".$password."<br>";

	 $stores  = R::find("data","email='"."$username"."'" AND "password='"."$password"."'");
	// $stores = R::getAll("select *from afterId where email='"."$username"."' AND password='"."$password"."'");
 	$flag = 0;
  foreach($stores as $i1){
  	if($i1["email"]==$username && $i1["password"]==$password){
  		 echo "<h1>successfull Login</h1>";
  		$flag++;
  		echo $i1["email"]."->".$i1["password"]."<br>";

  	}

  		

  }
  	if($flag==1){
  		header('Location: mineHTML.php');
  	}else {
  		header('Location: loginHTML.php');
  	}
  		
  
  
  

	//hash conversion
	$newusername = md5($username);
	$newpassword= md5($password);

	//echo "Welcome,".$newusername."<br>".$newpassword;

	//inserting new values to DB
  	



}else if($_SERVER["REQUEST_METHOD"]=="GET"){

}



  // 5. Disconnect from the database
  R::close();

  
?>




