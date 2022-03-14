var myform = document.getElementById("myform");

myform.onsubmit = function(e){
         e.preventDefault();       
        var start = document.getElementById("start").value ; 
        var end = document.getElementById("end").value ;
        var patt = /\d{2}:\d{2}/i ; 
        var m = start.match(patt) ; 
        var n = end.match(patt) ; 
    
        var arrStart = start.split(":");
        var arrEnd  = end.split(":");
         
        if(  start == "" || end == "" ){
    
    alert("please fill the fields !") ; 
    
    }
    else if(!Boolean(m)) {
          
        alert("Enter a valid start time !");
        return false ; 
   }

    else if(!Boolean(n)){
            alert("Enter a valid end time !");
              return false ; 
    
         }
   
    else if(arrStart[0] > 24  || arrStart[0] < 0 || arrStart[1] < 0 || arrStart[1] > 60 ){
    
            
        alert("Enter a valid start time !");
              return false ; 
    
    }else if(arrEnd[0] > 24  || arrEnd[0] < 0 || arrEnd[1] < 0 || arrEnd[1] > 60 ){
    
            
        alert("Enter a valid end time !");
              return false ; 
    
    }
    else if(arrStart[0] >= arrEnd[0]){

        if(arrStart[0] == arrEnd[0]){
            if(arrStart[1] >= arrEnd[1]){
                alert("Enter a valid end time !");
                return false ; 
            }
            else{
                sendData();

            }

        }
        else if(arrStart[0] > arrEnd[0]){
            alert("Enter a valid end time !");
            return false ; 

        }

       

    }
    else{
    
        
        sendData();
    
    
    }
    
} 

function sendData(){

    var form = new FormData(myform);
    var text = "";
    
    for(let [key , value] of form){
        text += key + "=" + value + "&" ;         
    }

    var xhr = new XMLHttpRequest();

    xhr.onload = function(){
        if(xhr.status == 200){
            alert("Data added to the scehdule !") ; 
        }
        else
            alert("an error occur"); 
        }

    xhr.open("POST" , "insert.php" , true);
    xhr.setRequestHeader("Content-type" ,"application/x-www-form-urlencoded" );
    xhr.send(text);

}
      
       