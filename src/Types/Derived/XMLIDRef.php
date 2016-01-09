<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLIDRef
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLIDRef extends XMLNCName
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'IDREF';
    }
}