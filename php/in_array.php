<?php
/**
 * 检测数组中是否存在某个值
 * 如果第一个参数是string，则要区分大小写
 * 第二个参数为数组
 * 第三个参数如果有true ，则会检查类型是否相同
 * */
$array1 = [
    "mac",
    "windows",
    "linux",
    "unix",
    123,
    "456"
];
var_dump(in_array("linux", $array1))."\n";
var_dump(in_array("Linux", $array1))."\n";
var_dump(in_array(456, $array1))."\n";
var_dump(in_array(456, $array1, true))."\n";
?>
