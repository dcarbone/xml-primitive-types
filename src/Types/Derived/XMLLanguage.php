<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLLanguage
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLLanguage extends XMLToken
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'language';
    }
}