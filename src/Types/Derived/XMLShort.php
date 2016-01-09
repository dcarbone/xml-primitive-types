<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLShort
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLShort extends XMLInt
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'short';
    }
}