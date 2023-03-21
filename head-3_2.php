<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE-edge">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
<title>Head/Admin with 3 units.</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href= "style.css">
</head>

<body><div class= "container">
    <div class="box">
    <br><br>
        <h1 class = "text-white bg-danger"><strong>This form is for head/admin members with 3 units.</h1></strong>
        <h2><strong>Note: BEFORE choosing OVERLOAD, you MUST click SEND first.</h2></strong>
        <form action="">
        <h2><strong>It is mandatory to choose OVERLOAD on this page.</h2></strong>
            <h4><strong> You can atleast one subject.</h4></strong>
            
            
            <label><strong><h4 class = "text-danger">Last preferred subject</h4></strong></label>
            <input type="text"name ="sub2" id = "input" class = "form-control form-control-m" placeholder="Last preferred subject"><br><br>
			<ul class = "list"></ul>


            <button> INPUT </button>
            <br>
            <br>
            
            <a class="btn btn-primary btn-lg" href="overload-reg.php" role="button">OVERLOAD</a>
            <a class="btn btn-danger btn-lg" href="delete-head.html" role="button">DELETE</a>
        </form>  
		
        <script src = "script.js"></script>  
           
    
        

</div>

</body>
</html>
<?php

global $sub2;

extract($_REQUEST);
$file=fopen("head-3-units.txt", "a+");


fwrite($file, "Second preferred subject :");
fwrite($file, $sub2 . "\n");

fwrite ($file, "\n");

?>

