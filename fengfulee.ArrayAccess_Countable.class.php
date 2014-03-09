<?PHP
#	这个类实现了 ArrayAccess 和 Countable 接口.
#	这样就能够像数组一样对其进行赋值 和 使用 count() 函数了.
#	并且这里使用了 Singleton单例模式....
class Single implements ArrayAccess,Countable{

	private $name;	#给它一个属性..
	private static $_instance = null;#对象实例..
	private $container = array();	#数组,用于存放数据...
	#实现 单例模式.....
	static function instance(){
		if(null==self::$_instance){
			#如果为空,则创建..否则直接返回该静态变量(实例化的对象...)
			return	self::$_instance = new Single();
		}
		return self::$_instance;
	}

	#设置getter,setter 方法..
	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	#ArrayAccess 需要实现4个方法..
	#offsetExists(),标示一个元素是否存在.
	#offsetGet(),获取一个元素..
	#offsetSet(),设置一个元素..
	#offsetUnset() 删除一个元素...
	public function offsetSet($offset,$value){
		if(is_null($offset))	$this->container[] = $value;
		else			$this->container[$offset] = $value;
	}

	public function offsetGet($offset){
		return isset($this->container[$offset])?$this->container[$offset]:null;
	}
	
	public function offsetExists($offset){
		return isset($this->container[$offset]);
	}

	public function offsetUnset($offset){
		unset($this->container[$offset]);
	}

	#Countable接口需要实现count方法...
	public function count(){
		return sizeof($this->container);	#sizeof是 count的别名方法...
	}
}//end of clazz...


	#t################test################
	$s = Single::instance();
	$s-> setName('fengfulee');
	echo $s->getName(),"\n";
	$s['name'] = 'fengfulee';
	$s['sex'] = 'man';
	$s['age'] = 23;
	$s['job'] = 'student';
	echo $s['name'],',',$s['sex'],',',$s['age'],',',$s['job'],"\n";
	
	echo count($s),"\n";






?>
