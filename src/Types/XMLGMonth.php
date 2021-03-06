<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLGMonth
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
class XMLGMonth extends AbstractXMLPrimitiveType
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'gMonth';
    }
}