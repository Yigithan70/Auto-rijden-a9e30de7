<?php  


	$line2 = readline("Hoe oud ben je? ");
	readline_add_history($line);
	if ($line2 >= 16.50) {
		echo "Je mag beginnen met rijlessen!";
	}

	else{
		echo "Helaas, je mag nog niet beginnen met rijlessen";
	}


?>