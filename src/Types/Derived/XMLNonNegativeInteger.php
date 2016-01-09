<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLNonNegativeInteger
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLNonNegativeInteger extends XMLInteger
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'nonNegativeInteger';
    }
}