<?PHP
	#选择排序法..从每一趟的排序中选出最小的一个元素..
	function selectSort($array){
		$num = count($array);
		if($num<=1) return;
		for($i=0;$i<$num;$i++){
			for($j=$i+1;$j<$num;$j++){
				if($array[$j]<$array[$i])
					list($array[$i],$array[$j]) = array($array[$j],$array[$i]);
			}
		}

		return $array;
	}

	$arr = array(7,5,3,4,6,2,1);
	print_r(selectSort($arr));
?>
