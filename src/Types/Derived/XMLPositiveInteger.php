<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLPositiveInteger
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLPositiveInteger extends XMLNonNegativeInteger
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'positiveInteger';
    }
}