<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLUnsignedInt
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLUnsignedInt extends XMLUnsignedLong
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'unsignedInt';
    }
}