<?php
/**
 * 合并一个或多个数组
 * 1. 如果输入的数组中有相同的 字符串键名 ，则该键名后面的值将覆盖前面的值。如果是数字键名则不会覆盖，而是附加在后面
 * 2. 如果只给了一个数组，并且该数组是数字索引，则键名会以连续的方式重新索引
 * 3. 如果想完全保留原有数组并只想新的数组附加在后面，用 +
 * 号来连接，注意，此时如果键名相同，则会保留第一个数组中的同键名的元素，第二个数组中的元素将被忽略
 * */

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);
?>
