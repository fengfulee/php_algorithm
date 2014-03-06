<?PHP
	#二分查找数组中的元素...
	#$arr 表示 要查找的数组
	#$low 表示最小值..
	#$hig 表示最大值..
	#$k表示要查找的值..
	function bin_search($arr,$low,$high,$k){
		if($low>$high) return;
		$mid =intval(($low+$high)/2);	#这个表示的是中间值...
		if($k=$arr[$mid]) return $mid;
		elseif($k<$arr[$mid]){
			return bin_search($arr,$low,$mid-1,$k);
		}else{
			return bin_search($arr,$mid+1,$high,$k);
		}
		return ;
	}

#	二分查找法是效率最高的一种查找方法..
	
#	下面的是顺序查找法....这里不要求内容从小到大排列..
	#$arr 表示数组.
	#$n 表示在 前 $n个里面查 
	# $k表示要查找的内容..
	function sequence_search($arr,$n,$k){
		if(count($arr)<=1) return ;
		for($i=0;$i<count($arr);$i++){
			if($arr[$i]==$k){
				return $i;
				break;
			}
		}
	}




?>
