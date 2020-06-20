<?php

namespace apps\Test;

class TestModels extends \framework\core\system\System_Models
{

	public function TestModel()
	{

		R::setup($db['name'],$db['user_name'],$db['password'] );
	}
}