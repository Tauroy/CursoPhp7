<?php
	/*////////////////
	 	  26.Json.
	//////////////////*/
	//Json.
	//gerar array aparti do json.

	 	  $json = '[{"nome":"Yago","idade":"18"},{"nome":"Matheus","idade":"17"}]';

	 	  $data = json_decode($json, true);
	 	  var_dump($data);
?>
