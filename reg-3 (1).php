<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
<title>Regular with 3 units</title>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class= "container">
    <div class="box">
        <br><br>
        <h1><strong>This form is for regular faculty members with 3 units.</h1></strong>
        <h2><strong>Note: BEFORE choosing OVERLOAD, you MUST click SEND first.</h2></strong>
        <h3><strong>YOU MUST FILL AT LEAST ONE SUBJECT.</h3></strong>
        <form action="" method = "POST">
        <label>Name</label>
            <input type="text"name ="name" placeholder="Name"><br><br>
            <label> What is your preferred time? (Choose only from 7:00 - 19:00)</label>
            <input type="text"name ="time" placeholder="Time to teach"><br><br>
            <label>Most preferred subject</label>
            <input type="text"name ="sub1" placeholder="Most preferred subject " id = "subs"/><br><br>
            <span id = "search_result"></span>
            <label>Second preferred subject</label>
            <input type="text"name ="sub1" placeholder="Second preferred subject "><br><br>
            
            
            <button> Send </button>
            <br>
            <br>
            <p><strong>CHOOSE OVERLOADED UNITS</strong></p>
            <a class="btn btn-danger btn-lg" href="overload-reg.php" role="button">OVERLOAD</a>
            
            
            <br>
            <br>
           
            <a class="btn btn-secondary btn-lg" href="regular.php" role="button">Back</a> 

        </form>  
        
           
    
        

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript" src= "creation-form/script.js"></script>
</body>
</html>
<?php
global $name;
global $time;
global $sub1;
global $sub2;
extract($_REQUEST);
$file=fopen("reg-3-units.txt", "a+");

fwrite($file, "Name :");
fwrite($file, $name . "\n");
fwrite($file, "Preferred time :");
fwrite($file, $time . "\n");
fwrite($file, "Most preferred subject :");
fwrite($file, $sub1 . "\n");
fwrite($file, "Second preferred subject :");
fwrite($file, $sub2 . "\n");
fwrite ($file, "\n");

?>


