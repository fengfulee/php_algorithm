<?PHP
	#插入排序法.
	#第一个元素默认已经被排序...
	#从下一个开始,循环和之前的比对,如果小于之前的,替换..

	#一直循环到最后..
	function insertSort($array){
		$num = count($array);
		if($num<=1)	return $array;
		for($i=1;$i<$num;$i++){
			$tmp = $array[$i];
			$j = $i - 1;
			while($array[$j]>$tmp&&$j>=0){
			#这句话的意思是: 如果这个数比tmp大,那么就将该数往后挪一位,不用担心覆盖,因为tmp已经保存起来了..
			#然后将tmp的值放在j的位子上...
				list($array[$j+1],$array[$j]) = array($array[$j],$tmp);
				$j--;
			}
		}

		return $array;
	}

	$arr = array(5,2,3,4,1);
	print_r(insertSort($arr));
?>
