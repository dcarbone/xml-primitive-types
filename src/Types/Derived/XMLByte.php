<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;


/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLByte
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLByte extends XMLShort
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'byte';
    }
}