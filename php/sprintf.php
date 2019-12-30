<?php
/**
 * sprintf 返回一个格式化后的字符串
 *
 * Type     Specifiers
 * string   s
 * integer  d, u, c, o, x, X, b
 * double   g, G, e, E, f, F
 *
 * */

$num = 5;
$thing = 'trees';

$format = "there are %d %s";

echo sprintf($format, $num, $thing);
?>
