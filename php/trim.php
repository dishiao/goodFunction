<?php
/**
 * trim 会去掉字符串 首尾 的指定字符，中间的不管
 *
 * trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] ) : string
 * 第二参数 默认是
 * " " 普通空格
 * "\t" 制表符
 * "\n" 换行符
 * "\r" 回车符
 * "\0" 空字节符
 * "\x0B" 垂直制表符
 *
 * */
function trim_value(&$value) 
{ 
        $value = trim($value); 
}

$fruit = array('apple','banana ', ' cranberry ');
var_dump($fruit);
// array_walk将用户自定义的函数应用到array数组中的每个单元
array_walk($fruit, 'trim_value');
var_dump($fruit);

?>
