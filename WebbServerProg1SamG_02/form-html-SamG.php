<?php

$name = $_GET["name"];
$lastname = $_GET["lastname"];

echo '<DOCTYPE html>
<html>
<head>
    <title>'.$name.' '.$lastname.'</title>
</head>
<body>
'.$name.' '.$lastname.'
</body>
</html>';

?>