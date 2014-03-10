<?PHP
####该文件中包含两个类,一个是我们的节点类.
####另外一一个就是链式堆栈的类.
	class LNode{
		public $element;	//节点内的元素
		public $next;		//下一个节点的信息位置
		//构造方法..
		public function __construct(){
			$this->element = null;
			$this->next = 0;
		}
	}


####下面是StackLinked 类的实现..
class StackLinked{
	public $mNext;			//指向上一个元素.
	public static $mlength;		//统计栈内元素的长度

	public function __construct(){
		$this->mNext = null;
		self::$mlength = 0;
	}

	//判断堆栈是否为空..
	public function isEmpty(){
		if($this->mNext == null){
			return true;
		}else{
			return false;
		}
	}
	//Push 元素入栈
	public function pushStack($e){
		$lnode = new LNode();	//实例化一个节点对象.一个用来存放元素,一个用来记录上一个元素的地址.
		$lnode ->element = $e;
		$lnode -> next = $this->mNext;
		$this->mNext = &$lnode;
		$this->mlength ++;
	}
	//POP 元素出栈.这里使用引用参数的目的是将元素返回....
	public function popStack(&$e){
		if($this->isEmpty())	return false;
		
		$p = $this->mNext;	#这里的mNext.指向栈顶元素..
		$e = $p -> element;	#这个表示
		$this->mNext = $p -> next;
		self::$mlength --;	
	}


	//获取栈内元素个数..
	public function getLength(){
		return self::$mlength;
	}
	
	//获取所有栈内元素..
	public function popAll(){
		if($this->isEmpty())	return false;

		$e = array();
		while($this->mNext!=null){
			#只有到栈底的时候,它的next值为null.因为它在之前的一个循环中,就已经被循环输出了.
			$e[] = $this->mNext->element;
			$this->mNext = $this->mNext->next;	
		}

		self::$mlength = 0;
		return $e;
	}


}//end of clazz...
?>




<?PHP
/////////////////////////test///////////////////////////

	$stacklinked = new StackLinked();
	$stacklinked -> pushStack('fengfulee');
	$stacklinked -> pushStack('fengfu');
	echo $stacklinked->getLength(),"\n";
	print_r($stacklinked->popAll());
	
?>
