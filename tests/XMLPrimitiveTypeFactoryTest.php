<?php

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLPrimitiveTypeFactoryTest
 */
class XMLPrimitiveTypeFactoryTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (file_exists(__DIR__.'/../cache/XMLPrimitiveTypeMap.php'))
            unlink(__DIR__.'/../cache/XMLPrimitiveTypeMap.php');
    }

    protected function tearDown()
    {
        if (file_exists(__DIR__.'/../cache/XMLPrimitiveTypeMap.php'))
            unlink(__DIR__.'/../cache/XMLPrimitiveTypeMap.php');
    }

    /**
     * @covers \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory::__construct
     * @uses \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeCacheGenerator
     *
     * @return \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory
     */
    public function testCanInitializeFactoryWithDefaultCacheDir()
    {
        $factory = new \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory();
        $this->assertInstanceOf('\\DCarbone\\XMLPrimitiveTypes\\XMLPrimitiveTypeFactory', $factory);
        return $factory;
    }

    /**
     * @covers \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory::__construct
     * @expectedException \RuntimeException
     */
    public function testExceptionThrownWhenPassingInvalidCacheDir()
    {
        new \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory('sandwiches');
    }

    /**
     * @covers \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory::getPrimitiveType
     * @depends testCanInitializeFactoryWithDefaultCacheDir
     * @param \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory $factory
     */
    public function testCanInitializePrimitiveTypeWithCamelName(\DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory $factory)
    {
        foreach(\DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeMap::$_typeMap as $type=>$class)
        {
            $obj = $factory->getPrimitiveType($type);
            $this->assertInstanceOf($class, $obj);
            $this->assertEquals($type, $obj->getXMLDataType());
        }
    }

    /**
     * @covers \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory::getPrimitiveType
     * @depends testCanInitializeFactoryWithDefaultCacheDir
     * @param \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory $factory
     */
    public function testCanInitializePrimitiveTypeWithLowerName(\DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory $factory)
    {
        foreach(\DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeMap::$_typeMap as $type=>$class)
        {
            $obj = $factory->getPrimitiveType(strtolower($type));
            $this->assertInstanceOf($class, $obj);
            $this->assertEquals($type, $obj->getXMLDataType());
        }
    }

    /**
     * @depends testCanInitializeFactoryWithDefaultCacheDir
     * @expectedException \InvalidArgumentException
     * @param \DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory $factory
     */
    public function testExceptionThrownWhenGettingInvalidXMLDataType(\DCarbone\XMLPrimitiveTypes\XMLPrimitiveTypeFactory $factory)
    {
        $factory->getPrimitiveType('sandwiches');
    }
}
