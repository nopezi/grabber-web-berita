<?php

$url = 'http://localhost/graber/kiblat_news.php';
//create a new cURL resource
$ch = curl_init($url);
//setup request to send json via POST
// $data = array(
//     'username' => 'jurnalweb',
//     'password' => 'password123456'
// );
// $payload = json_encode(array("user" => $data));
// //attach encoded JSON string to the POST fields
// curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//execute the POST request
$result = curl_exec($ch);
//close cURL resource
curl_close($ch);
//Output response
// echo "<pre>$result</pre>";
print_r($result);
//get response
$data = json_decode(file_get_contents('php://input'), true);
//output response
echo '<pre>'.$data.'</pre>';