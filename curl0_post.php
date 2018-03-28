<?php
$GLOBALS['url0'] = $_GET['url0'];
$GLOBALS['data0'] = $_GET['data0'];

function post0($url,$data) {
		$process = curl_init($url);
		$headers[] = "Content-Type:application/json";
		curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($process, CURLOPT_HEADER, 1);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_POSTFIELDS, $data);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($process, CURLOPT_POST, 1);
		$return = curl_exec($process);
		curl_close($process);
		return $return;
}

post0($GLOBALS['url0'],$GLOBALS['data0']);
echo "posted:<br>";
echo "url0=".$GLOBALS['url0']."<br>";
echo "data0=".$GLOBALS['data0']."<br>";

//"http://demo.thingsboard.io:8080/api/v1/RxUgc8zheYKsFcbtbpL1/telemetry"
//"{\"var1\":\"888\"}");

//NOTE: NO QUOTES ARE NEEDED

// (example):
// http://localhost/iot0/curl0_post.php?url0=40.79.87.199:8080/api/v1/ND3AxQoMb32gpzIvfdiq/telemetry&data0={var1:222}

?>

