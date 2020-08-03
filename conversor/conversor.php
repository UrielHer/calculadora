 <!DOCTYPE html>
 <html>
 <head>
    <style>
   
    </style>
 </head>
 <body>
 

 <?php
 $temp = $_POST['temperatura'];
    $unitat = $_POST['unitat'];
                 
    if ($temp == "") {
            echo "<p>No has escrit cap temperatura</p><p><input type='button' value='Enrera' onClick='history.go(-1);'></p>";        
    } elseif ($unitat == 'c') {
        //Passar de celcius a Fahrenheit
        $temp = $temp * 1.8 + 32;
        echo "Temp: ".$temp."<p><input type='button' value='volver' onClick='history.go(-1);'></p>";
    } else {
        //Passar de Fahrenheit a celsius
        $temp = $temp * 1.8 - 32;     
        echo "Temp: ".$temp."<p><input type='button' value='volver' onClick='history.go(-1);'></p>";
    }        
    ?>  
</body>
 </html>