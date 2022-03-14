<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Plan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet" href= 'style1.css' >
    <style>


#home{
    color:blue ; 
}
#add{
    color:grey ; 
}

#past{
    color:grey;
}
    </style>
</head>
<body>
    <div class="container">

        <div>
		
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
				<a class="nav-item nav-link active" id = "home" href="index.php">Home</a>
				<a id = "add" class="nav-item nav-link" href="add.html">Add a new Event</a>
				<a id = "past" class="nav-item nav-link" href="pastevents.php">Past Events</a>
					
			</nav>
		
		</div>
		

        <div>
        <h2 class="welcome">Welcome To My Study Plan !</h2>

        <form action="add.html">
            <button type="submit" class="btn btn-primary  " >Add a new Event </button> <br><br>
        </form>
        <h5>Upcoming Events</h5>
        <?php
            include "getdata.php";
        ?>
    </div>

    </div>

    
</body>
</html>