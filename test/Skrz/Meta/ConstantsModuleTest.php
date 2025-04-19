<?php
namespace Skrz\Meta;

require_once __DIR__ . '/../../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Skrz\Meta\Fixtures\Constants\ConstantsMetaSpec;
use Skrz\Meta\Fixtures\Constants\Meta\ClassWithPropertiesMeta;
use Symfony\Component\Finder\Finder;

class ConstantsModuleTest extends TestCase
{


	public function testClassNameConstant()
	{
		$this->assertEquals("Skrz\\Meta\\Fixtures\\Constants\\ClassWithProperties", ClassWithPropertiesMeta::CLASS_NAME);
	}

	public function testShortNameConstant()
	{
		$this->assertEquals("ClassWithProperties", ClassWithPropertiesMeta::SHORT_NAME);
	}

	public function testEntityNameConstant()
	{
		$this->assertEquals("classWithProperties", ClassWithPropertiesMeta::ENTITY_NAME);
	}

	public function testPropertyConstants()
	{
		$this->assertEquals("property", ClassWithPropertiesMeta::PROPERTY);
		$this->assertEquals("anotherProperty", ClassWithPropertiesMeta::ANOTHER_PROPERTY);
		$this->assertEquals("property_with_underscores", ClassWithPropertiesMeta::PROPERTY_WITH_UNDERSCORES);
	}

}
