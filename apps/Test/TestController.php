<?php
namespace apps\Test;
class TestController extends \framework\core\system\System_controller
{

	function loginAction()
	{
		$this->views =  new TestViews;
		$this->views->content();
	}
}