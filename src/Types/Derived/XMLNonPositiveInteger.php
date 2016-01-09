<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLNonPositiveInteger
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLNonPositiveInteger extends XMLInteger
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'nonPositiveInteger';
    }
}