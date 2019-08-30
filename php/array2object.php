<?php
$arr = array(
    'one' => '1',
    'two' => '2',
    'three' => '3'
);

$obj = json_decode(json_encode($arr));
print_r($obj);
?>
