<?php

// using unlink() function

$path = "head-3-units.txt";

// Use unlink() function to delete a file
if (!unlink($path)) {
	echo ("$file_pointer cannot be deleted due to an error");
}
else {
	header ("Location: head.php?deletesucess");
}

?>
