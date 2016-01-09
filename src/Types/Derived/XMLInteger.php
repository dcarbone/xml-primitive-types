<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

use DCarbone\XMLPrimitiveTypes\Types\XMLDecimal;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLInteger
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLInteger extends XMLDecimal
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'integer';
    }
}