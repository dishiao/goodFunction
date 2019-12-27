<?php
/**
 * 截断字符串
 * substr(string $string, int $start, [int $length]) : string 
 * string 是必须传入，至少一个字符
 * start 正数：开始位数从左1(0)开始,
 *       负数：开始从右1(-1)开始,
 * length 正数：从start开始最多包括length个字符
 *        负数：string末尾处的length个字符会被省略
 * 注意：
 * 1. start 为正数时, length默认值为全部
 * 2. start 为负数时, length默认值为1
 *
 * */
$str = "abcdefg";
echo substr($str, -1);
echo "\n g \n";
echo substr($str, 2);
echo "\n cdefg \n";
echo substr($str, 0, 3);
echo "\n abc \n";
echo substr($str, 2, -1);
echo "\n cdef \n"
?>
