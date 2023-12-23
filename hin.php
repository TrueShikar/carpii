<?php
error_reporting(0);
header("pragma: no-cache");
$ts = $_GET['ts'];
$url = $ts;
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Referer: https://bigcast.xyz/"
  )
);
$context = stream_context_create($opts);
$e = file_get_contents($url, false, $context);
echo $e;
?>
