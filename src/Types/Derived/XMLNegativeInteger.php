<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLNegativeInteger
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLNegativeInteger extends XMLNonPositiveInteger
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'negativeInteger';
    }
}