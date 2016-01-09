<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLInt
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLInt extends XMLLong
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'int';
    }
}