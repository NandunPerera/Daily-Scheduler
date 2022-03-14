<?php

	include "db.php"; 
	$day = $_POST["day"]; 
	$start = $_POST["startTime"] ; 
	$end  = $_POST["endTime"];


	$start .= ":00" ;   
	$end .= ":00" ;   

	$insert = "insert into plan(day , startTime,endTime) Values(?,?,?)" ; 

	$st = mysqli_prepare($con,$insert) ; 
	mysqli_stmt_bind_param($st ,"sss" ,$day , $start , $end);
	
	mysqli_stmt_execute($st);
	
