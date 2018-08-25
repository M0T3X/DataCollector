<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('db.sq3');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   $db->close();
?>






<?php 
	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=BTC,USD,EUR',
	    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
	    CURLOPT_SSL_VERIFYPEER => false
	));
	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	// Close request to clear up some resources
	curl_close($curl);
	$data = json_decode($resp);
	//var_dump($resp);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Data Collector</title>
</head>
<body>
	<h1>Data Collector</h1>
	<p><?php echo $resp; ?></p>
	<p><?php echo $data->BTC; ?></p>
	<p><?php echo $data->USD; ?></p>
	<p><?php echo $data->EUR; ?></p>
</body>
</html>