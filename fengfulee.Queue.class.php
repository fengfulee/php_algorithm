<?PHP
//该类用来模拟队列的功能...
//队列的特点就是先进先出...好像排队一样,先进先出...
class Queue{
	public $length = 12;		#设置队列的长度...超过长度则会pop队首的元素...
	public $queue = array();	#队列用一个数组模拟..
	public $delimiter = ',';	#分隔符,这样,如果像 23,24,25这样的字符串也是允许的..

	public function run($param){
		//判断是否是字符串...
		if(!is_array($param)){
			//如果不是数组...
			$param  = $this->strToQueue($param);
		}

	
		if((count($param)+$this->queueCount())>$this->length){
			$removeCount = count($param) + $this->queueCount() - $this->length;
			for($i=0;$i<$removeCount;$i++){
				$this->	queueRemove();
			}
		}

		//然后将所有的添加的元素添加上..
		foreach($param as $key => $value){
			$this->	queueAdd($value);
		}
	}

	#设置队列长度..
	public function setLength($length){
		$this->length = $length;
	}

	#设置分隔符..
	public function setDelimiter($str){
		$this->delimiter = $str;
	}

	#将字符串转化为 数组..
	public function strToQueue($str){
		if(is_string($str)){
			return explode($this->delimiter,$str);
		}
	}

	#队列添加元素..array_push
	public function queueAdd($e){
		array_push($this->queue,$e);
		return $this->queueCount();
	}

	#队列删除元素...array_shift..
	public function queueRemove(){
		return array_shift($this->queue);
	}
	
	//这个函数是用来记录当前队列的长度..
	public function queueCount(){
		return count($this->queue);
	}

	//输出所有队列中的元素..
	public function queueGet(){
		return	$this->queue;
	}


	//////////////////////########test///////////
} //end of clazz.
?>



<?PHP
	$que = new Queue();
	$que->setLength(8);
	$que->setDelimiter(',');
	$que->run('2,3,4,5,6');
	$que->run('7,8,9,10');
	print_r($que->queueGet());
?>
