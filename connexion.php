<?php 
	$host="localhost";
	$user="root";
	$mdp="";
	$db="db_save";
	$link = mysqli_connect($host,$user,$mdp);
	mysqli_select_db($link,$db);
 ?>