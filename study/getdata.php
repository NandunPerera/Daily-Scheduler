<?php

include "db.php";

$sql = "Select * from plan
        where id  Not IN (select id from pastevents )
        ORDER BY FIELD(day, 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY'), startTime" ; 

if($result = mysqli_query($con ,$sql)){

    
if(mysqli_num_rows($result) > 0 ){
    echo "<table class ='table'><tr><th>Day</th><th>start_at</th><th>end_at</th></tr>" ; 

while($row = mysqli_fetch_assoc($result)){

    echo "<tr><td>".$row["day"]."</td>
                <td>".$row["startTime"]."</td>
                <td>".$row["endTime"]."</td></tr>" ; 

                
}
echo "</table>" ; 
mysqli_close($con);
}

}

