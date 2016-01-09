<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLGYearMonth
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
class XMLGYearMonth extends AbstractXMLPrimitiveType
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'gYearMonth';
    }
}