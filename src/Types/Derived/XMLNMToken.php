<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLNMToken
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLNMToken extends XMLToken
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'NMTOKEN';
    }
}