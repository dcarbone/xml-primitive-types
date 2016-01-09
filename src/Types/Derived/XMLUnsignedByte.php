<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLUnsignedByte
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLUnsignedByte extends XMLUnsignedShort
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'unsignedByte';
    }
}