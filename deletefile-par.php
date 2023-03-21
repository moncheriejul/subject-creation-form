<?php

// using unlink() function

$path = "par-30-units.txt";

// Use unlink() function to delete a file
if (!unlink($path)) {
	echo ("$file_pointer cannot be deleted due to an error");
}
else {
	header ("Location: parttime.php?deletesucess");
}

?>
