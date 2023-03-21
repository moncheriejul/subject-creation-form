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
        <h1 class = "text-white bg-primary"><strong>This form is for regular faculty members with 18 units.</h1></strong>
        <h2><strong>Since this is the fifth form, you are now able to choose overload. You'll be able to overload your subjects on the succeeding pages.</h2></strong><br><br>
    
        <form action="">
     
                   
            <h4><strong> You can only input 5 to 9 subjects only.</h4></strong>
            
            <label><h4 class = "text-primary">Fifth preferred subject</h4></strong></label>
            <input type="text"name ="sub5" id = "input" class = "form-control form-control-m" placeholder="Fifth preferred subject"><br><br>
            <ul class = "list"></ul>

            <button> INPUT </button>
            <br>
            <br>
            <a class="btn btn-success btn-lg" href="fte_6.php" role="button">ADD SUBJECTS</a>
            <a class="btn btn-primary btn-lg" href="overload-reg.php" role="button">OVERLOAD</a>
            <a class="btn btn-danger btn-lg" href="delete.html" role="button">DELETE</a>


        </form>  
		
        <script src = "script.js"></script>  
        
        
        
           
    
        

</div>

</body>

</html>

<?php

global $sub5;

extract($_REQUEST);
$file=fopen("reg-18-units.txt", "a+");


fwrite($file, "5th preferred subject :");
fwrite($file, $sub5 . "\n");

fwrite ($file, "\n");

?>

