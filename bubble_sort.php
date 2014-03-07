<?PHP
	#冒泡排序法.....
	#冒泡排序法,就是在每次循环的时候,小数放前面(后面),大数放后面(前面)的一种算法...
	function bubble_sort($array){
		if(count($array)<=1) return;
		#这里使用 for循环
		for($i=0,$num=count($array);$i<$num;$i++){
			for($j=$num-1;$j>$i;$j--){
				if($array[$j-1]>$array[$j]){
					list($array[$j-1],$array[$j]) = array($array[$j],$array[$j-1]);
				}
			}

		}
		return $array;
	}

	$arr = array(7,5,4,2,6,3,1);
	print_r(bubble_sort($arr));
?>
