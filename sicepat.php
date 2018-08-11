<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.sicepat.com/customer/destination",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
	"api-key: 19c52e435b6629053a4b3f9b3f9867c0",
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
$destination = json_decode($response);
echo  "<pre>";
print_r($destination->sicepat->results);
/*
$file = fopen("contacts.csv","w");
foreach($destination->sicepat->results as $data){
	fputcsv($file,(array)$data);
}*/
exit;


// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://api.sicepat.com/customer/tariff?origin=CGK&destination=CGK10000&weight=1');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "api-key: 19c52e435b6629053a4b3f9b3f9867c0",
]
);

// Send the request & save response to $resp
$resp = curl_exec($ch);
$results = json_decode($resp);
echo "<pre>";
print_r($results);
exit;
if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
  echo "Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE);
  echo "\nResponse HTTP Body : " . $resp;
}

// Close request to clear up some resources
curl_close($ch);
?>