
<?php

$fileContent = file_get_contents('ip.txt');
$ipAddress = preg_match('/((25[0-5]|2[0-4][\d]|1[\d][\d]|[1-9]?[\d])\.){3}(25[0-5]|2[0-4][\d]|1[\d][\d]|[1-9]?[\d]\b)/', $fileContent, $matches);
$ipAddress = $matches[0];

file_put_contents('output.txt', $ipAddress);

?>
