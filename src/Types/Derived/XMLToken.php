<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLToken
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLToken extends XMLNormalizedString
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'token';
    }
}