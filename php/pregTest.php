<?php
$a[] = "test123test";
$a[] = "test1";
$a[] = "123test";
$a[] = "123test123";
$pattern = "/(^test)|test$/";

foreach($a as $value){
    if (preg_match($pattern, $value)){
        echo $value;
    }
    echo PHP_EOL;
}

?>
