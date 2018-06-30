<?php
$getdata = "foo=bar";
$opts = array('http' =>
    array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $getdata
    );

$context = stream_context_create($opts);

$result = file_get_contents('http://example.com/submit.php', false, $context);


//A POST request will be performed on http://example.com/submit.php
