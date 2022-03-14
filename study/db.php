<?php

$con = mysqli_connect("localhost" , "root","");

if(!$con){
	die("Error :".mysqli_conncet_error());

}
else
{
	$sql = "Create database if NOT EXISTS schedule";
	
	if(mysqli_query($con , $sql)){


		mysqli_select_db($con , "schedule");
		
		$table1 = "Create table if Not Exists plan(
			   id int not null AUTO_INCREMENT , 
			   day varchar(20),
			   startTime Time , 
			   endTime   time , 
			   primary key(id) )" ;

		$table2 = "Create table if Not Exists pastevents(
			id int not null , 
			sleepTime int,
			Primary Key(id,sleepTime))";

		mysqli_query($con,$table1);
		mysqli_query($con,$table2);
		
			
			
	

	}
	

	
}