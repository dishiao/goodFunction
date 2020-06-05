<?php
# 二分法
# 必须是有序的数列
function bin_search($arr = [], $value = '')
{
	$low = 0;
	$high = count($arr) - 1;
	$flag = (count($arr) % 2 == 0) ? 'Even' : 'Odd'; 
	$count = 0;
	while ($low <= $high) {
		$count++;
		if ($flag === 'Even') {
			$mid = floor(($low + $high) / 2);
		} 
		if ($flag === 'Odd') {
			$mid = ceil(($low + $high) / 2);		
		}

		$guess = $arr[$mid];
		
		if ($guess == $value) {
			return [
				'key' 	=> $mid,
				'value'	=> $guess,
				'times' => $count
			];
		} 
		if ($guess < $value) {
			$low = $mid;
		} 
		if ($guess > $value) {
			$high = $mid;
		}
	}
	
	return null;
}

$arr = [9, 8, 7, 6, 5, 4, 3, 2, 1];
$arr = array_reverse($arr);

$value = 9;
$ret = bin_search($arr, $value);
print_r($ret);