<?PHP
	#快速排序法.
	#快速排序法是采用了递归的方法...
	#通过一趟排序将要排序的数据分割成独立的两部分其中一部分的所有数据都比另外一个部分小...
	function quickSort($array){
		$len = count($array);
		if($len<=1) return $array;	#这也是递归的终结点...
		$key = $array[0];		#取第一个元素...
		$left_arr = array();
		$right_arr = array();
		for($i=1;$i<$len;$i++){
			if($array[$i]<=$key)	$left_arr[] = $array[$i];
			else			$right_arr[] = $array[$i];	
		}
		$left_arr = quickSort($left_arr);
		$right_arr = quickSort($right_arr);
		return array_merge($left_arr,array($key),$right_arr);
	}

	$arr = array(5,2,7,1,3,6,4);
	print_r(quickSort($arr));
?>
