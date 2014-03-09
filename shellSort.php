<?PHP
#	希尔排序算法... 先取一个小于n的整数d1作为第一个增量，把文件的全部记录分成d1个组。所有距离为d1

#	的倍数的记录放在同一个组中。先在各组内进行直接插入排序；然后，取第二个增量d2<d1重复

#	上述的分组和排序，直至所取的增量dt=1(dt<dt-l<…<d2<d1)，即所有记录放在同一组中进行

#	`直接插入排序为止。
	function shellSort($array){
		#如果不是数组,则返回...
		if(!is_array($array))	return false;
		
		$len = sizeof($array);	#sizeof 是count的别名函数 ...alias..
		$d = $len;
		while($d>1){		#循环终结在$d=1;
			$d = intval($d/2);
			$temp = NULL;
			$j=0;
			for($i=$d; $i<$len;$i+=$d){
				if($array[$i]<$array[$i-$d]){
					$temp = $array[$i];
					$j = $i-$d;
					while($j>=0&&$temp<$array[$j]){
						$array[$j+$d] = $array[$j];
						$j= $j-$d;
					}
					$array[$j+$d] = $temp;
				}
			}//end of for 
		}
		return $array;
	}

	$array = array(7,2,4,1,6,3,8,0,5);
	print_r(shellSort($array));
?>
