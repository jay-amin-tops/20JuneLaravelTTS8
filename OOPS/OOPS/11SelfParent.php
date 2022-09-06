<?php
class MyClass
{
	protected static function selfExample() {
	    echo "selfExample::myFunc()\n";
	}
	public static function callingStaticMethod() {
        echo "called";
        // $this->selfExample();
        self::selfExample();
	}
}
class OtherClass extends MyClass
{
	// Override parent's definition
	function OtherClass(){
		echo "called";
	}
	public static function myFunc(){
	// But still call the parent function
	// parent::myFunc();
	echo "OtherClass::myFunc()\n";
    parent::callingStaticMethod();
	}
}
// $class = new MyClass();
// $class->myFunc();
// $class->callingStaticMethod();
MyClass::callingStaticMethod();
OtherClass::myFunc()
// $class->selfExample();
// $class->callingStaticMethod();
?>