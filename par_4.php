<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
<title>FTE</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href= "style.css">

</head>

<body>
<div class= "container">
    <div class="box">
    <br><br>
        <h1 class = "text-white bg-success"><strong>This form is for part-time faculty members with 30 units.</h1></strong>
    
        <form action="">
     
                   
            <h4><strong> You can only input 7 to 15 subjects only.</h4></strong>
            
            <label><h4 class = "text-success">Fourth preferred subject</h4></strong></label>
            <input type="text"name ="sub4" id = "input" class = "form-control form-control-lg" placeholder="Fourth preferred subject"><br><br>
            <ul class = "list"></ul>

            <button> INPUT </button>
            <br>
            <br>
            <a class="btn btn-success btn-lg" href="par_5.php" role="button">ADD SUBJECTS</a>
            <a class="btn btn-danger btn-lg" href="delete-par.html" role="button">DELETE</a>  

        </form>  
		
        <script src = "script.js"></script>  
        
        
        
           
    
        

</div>

</body>

</html>

<?php

global $sub4;

extract($_REQUEST);
$file=fopen("par-30-units.txt", "a+");


fwrite($file, "4th preferred subject :");
fwrite($file, $sub4 . "\n");

fwrite ($file, "\n");

?>

