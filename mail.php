<?php
	$magicWord = 69;
	$messageString = "DING DONG!"; //default value
	
	echo "<html><head></head><body>\n";
	foreach($_REQUEST as $key => $value){
		if($key == "sendIt"){
			$sendIt = $value;
		}
		if($key == "msg"){
			$messageString = $value;
		}
	}
	
	$stamp = date('Y-m-d-Gis');
	
	if($sendIt == $magicWord){
		//send_mail("jsorchik@gmail.com", " Ding Dong", $messageString);
	}
	else{
		echo "<p> sendIt=$sendIt string=$messageString date=$stamp </p>\n";
	}
	
	echo "</body></html>\n";
	end;

	Function send_mail($to, $subject, $message)
	{
		$from = "jsorchik@gmail.com";
		mail($to, $subject, $message, "From: $from");
	}
?>