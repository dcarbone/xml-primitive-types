<?php

/*
 * PHP XML Primitives
 * Copyright (C) 2015  Daniel Paul Carbone
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
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
