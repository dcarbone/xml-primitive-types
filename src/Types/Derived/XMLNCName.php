<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLNCName
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLNCName extends XMLName
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'NCName';
    }
}