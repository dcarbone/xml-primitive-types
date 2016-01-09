<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLUnsignedShort
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLUnsignedShort extends XMLUnsignedInt
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'unsignedShort';
    }
}