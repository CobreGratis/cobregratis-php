<?php

require_once ('lib/CobreGratis.php');

class Test extends BankBillet {
}

class ActiveResourceTest extends PHPUnit_Framework_TestCase {
	function test_construct () {
		$t = new Test (array ('foo' => 'bar'));

		$this->assertEquals ($t->foo, 'bar');
		$t->foo = 'asdf';
		$this->assertEquals ($t->foo, 'asdf');
		$this->assertEquals ($t->_data, array ('foo' => 'asdf'));
		$this->assertEquals ($t->element_name_plural, 'bank_billets');
		$this->assertEquals ($t->site, 'https://app.cobregratis.com.br/');
	}
}

?>