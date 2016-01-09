<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

use DCarbone\XMLPrimitiveTypes\Types\XMLString;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLNormalizedString
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLNormalizedString extends XMLString
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'normalizedString';
    }
}