<?php

require path('app') . 'tasks/fetch.php';

class Fetch_Test extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->fetch = new Fetch_Task;
	}

	public function testStoresListOfAssets()
	{
		$this->assertClassHasStaticAttribute('path','Fetch_Task');
		$this->assertArrayHasKey('jquery', Fetch_Task::$paths);
	}
} 