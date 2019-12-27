<?php
/**
 * 返回字符串或者数组
 * str_replace(mixed $search, mixed $replace, mixed $subject, [int &$count]) : mixed
 * 在没有正则等特殊需求的时候，此函数效率高于 preg_replace()
 * 注意:
 * 1. 如果search 与 replace都是数组 且replace位数 >= search位数，则一一映射关系,
 *                                如果 replace位数 < search 位数, 则多余的替换将用空字符串来代替
 * 2. 如果search是数组 replace 是string， 则search中的每个元素都用这个replace来替换
 * */
$a = "hello world shanghai beijing ";
$b = [
    'hello',
    'world',
    'shanghai',
    'beijing'
    ];

echo $a ."\n";
echo str_replace(['hello', 'shanghai'], ['hi', 'sichuan'], $a). "\n";
echo str_replace(['hello', 'shanghai'], ['hi', 'beijing', 'sichuan'], $a). "\n";
echo str_replace(['hello', 'shanghai'], ['hi'], $a). "\n";
echo str_replace(['hello', 'shanghai'], "test", $a). "\n";

echo "=======================================================";

print_r ($b);
print_r (str_replace(['hello', 'shanghai'], ['hi', 'sichuan'], $b));
print_r (str_replace(['hello', 'shanghai'], ['hi', 'beijing', 'sichuan'], $b));
print_r (str_replace(['hello', 'shanghai'], ['hi'], $b));
print_r (str_replace(['hello', 'shanghai'], "test", $b));

?>
