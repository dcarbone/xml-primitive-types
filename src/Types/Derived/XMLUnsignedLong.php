<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLUnsignedLong
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLUnsignedLong extends XMLNonNegativeInteger
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'unsignedLong';
    }
}