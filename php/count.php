<?php
/**
 * 计算数组中单元数目，或 对象中的属性个数
 * */

$food = array('fruits' => array('orange', 'banana', 'apple'),
	              'veggie' => array('carrot', 'collard', 'pea'));

$test = [1, 2, 3, 4, 5];
// recursive count
echo count($food, COUNT_RECURSIVE); // output 8
echo "\n";
// normal count
echo count($food); // output 2
echo "\n";
// count test
echo count($test);
?>
