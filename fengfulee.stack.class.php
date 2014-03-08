<?PHP
	#该对象实现了 stack(栈) 后进先出 的功能...
class Stack{
	private $_data = array();	#数据存放....
	private $_end = null;		#角标...
#######插入一个数据....
	public function push($data){
		if($this->_end===null)	{
			$this->_end = 0;	#如果角标为0 ,则表示是第一个...
		}else{
			$this->_end ++;		#角标+1...
		}
		$this->_data[$this->_end] = $data;
	}
#	取出一个元素...
	public function pop(){
		if(empty($this->_data)) return false;
		$ret = $this->_data[$this->_end];
		#用 array_splice 函数将最后一个元素去除..并且将下标 -1..
		array_splice($this->_data,$this->_end);
		$this->_end --;
		return $this->_data;
	}
	
	public function getData(){
		return $this->_data;	
	}

	
}//end of clazz...

	$stack = new Stack();
	$stack->push('chuan');
	$stack->push('shan');
	$stack->push('fengfulee');
	var_dump($stack->getData());
	$data = $stack->pop();
	var_dump($data);
?>
