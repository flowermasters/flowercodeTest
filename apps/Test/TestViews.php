<?php

namespace apps\Test;

class TestViews extends \framework\core\system\System_views
{

	public function header()
	{
	require BASE_DIR.'/templates/test/part/header.html';
	}
	public function content()
	{
	require BASE_DIR.'/templates/test/index.html';
	}
	public function saidbar()
	{
	require BASE_DIR.'/templates/test/part/saibar.html';
	}
	public function footer()
	{
	require BASE_DIR.'/templates/test/part/footer.html';
	}

}