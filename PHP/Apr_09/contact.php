<?php

header("Access-Control-Allow-Origin: *");

echo 'message was delivered?';
echo '<pre>';
print_r($_POST);
echo '</pre>';



$sent_status = mail('s2100138@edu.bc.fi', 'sent prom php app', $_POST['message']);










?>