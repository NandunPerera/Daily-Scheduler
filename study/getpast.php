<?php

include "db.php";

$sql = "Select plan.* , pastevents.sleepTime from   plan , pastevents
        where plan.id = pastevents.id
        ORDER BY FIELD(day, 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY');" ; 

$result = mysqli_query($con ,$sql);

if(mysqli_num_rows($result) > 0 ){
        echo "<table class = 'table'><tr><th>Day</th><th>start_at</th><th>end_at</th><th>duration</th><th>sleepTime</th><th>effectiveTime</th></tr>" ; 

    while($row = mysqli_fetch_assoc($result)){
        $start = new DateTime($row["startTime"]) ; 
        $end =new DateTime($row["endTime"]) ; 
        $total = $end->diff($start) ; 

        $hours =  $total->format('%h');
        $minutes = $total->format('%i');

$diffInMinutes =  $hours * 60 + $minutes;
       
        $sleep = $row["sleepTime"] ; 
        $effective = $diffInMinutes - $sleep ; 
       
        echo "<tr><td>".$row["day"]."</td>
                    <td>".$row["startTime"]."</td>
                    <td>".$row["endTime"]."</td> 
                    <td>".$diffInMinutes."min</td> 
                    <td>".$row["sleepTime"]."min</td>
                    <td>". $effective ."min</td></tr>" ; 

                              
    }
    echo "</table>" ; 
    mysqli_close($con);
}