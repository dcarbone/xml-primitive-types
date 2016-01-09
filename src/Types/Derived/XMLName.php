<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLName
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLName extends XMLToken
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'Name';
    }
}