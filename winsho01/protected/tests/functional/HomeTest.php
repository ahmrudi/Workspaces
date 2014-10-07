<?php
class HomeTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->setBrowserUrl('http://localhost/winsho01');
	}
	public function testPushAndPop()
	{
		$home=array();
		$this->assertEquals(0,count($home));

		array_push($home,'foo');
		$this->assertEquals('foo',$home[count($home)-1]);
		$this->assertEquals(1,count($home));

		$this->assertEquals('foo',array_pop($home));
		$this->assertEquals(0,count($home));
		var_dump($home);
	}
}
?>
