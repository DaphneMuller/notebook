<?php

namespace OCA\NoteBook\Tests;

use OCA\NoteBook\AppInfo\Application;

class NoteServiceTest extends \PHPUnit\Framework\TestCase {

	public function testDummy() {
		$app = new Application();
		$this->assertEquals('notebook', $app::APP_ID);
	}
}