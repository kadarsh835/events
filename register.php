<?php
	if( $_POST["email"]) {
		$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
		fwrite($myfile, $_POST["event"]."\n");
		fwrite($myfile, $_POST["email"]."\n");
		fwrite($myfile, $_POST["firstName"]."\n");
		fclose($myfile);
	}
?>