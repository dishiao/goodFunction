<?php
$str = "chinese,我是中国人";
// 去除中文的正则
$patternC = "/[\x7f-\xff]/sim";
// 去除英文的正则
$patternE = "/[a-zA-Z]/";
// 替换为
$replacement = '';

echo preg_replace($patternC, $replacement, $str);
?>
