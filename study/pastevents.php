<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Plan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" href= 'style1.css'>
    <style>

#past{
    color:blue ; 
}
#home{
    color:grey ; 
}
#add{
    color:grey;
}
    </style>
</head>
<body>
    <div class="container">

        <div class="continer">
		
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
				<a id = "home" class="nav-item nav-link active" href="index.php">Home</a>
				<a id = "add" class="nav-item nav-link" href="add.html">Add a new Event</a>
				<a id = "past" class="nav-item nav-link " href="pastevents.php">Past Events</a>
			</nav>
		
		</div>
		
            
        
            <h2 class="welcome">Past Events & progress </h2>


        <div>
            <?php
                include "getpast.php";
            ?>
        </div>



    </div>
   
    
</body>
</html>