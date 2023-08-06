<?php

$filename = "note.txt";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $note = $_POST["note"];
  

    
			$file = fopen($filename, "a"); 
	fwrite($file, $note . "\n"); 
	fclose($file);
		
    
}
?>