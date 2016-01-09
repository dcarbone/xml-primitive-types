<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLGMonthDay
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
class XMLGMonthDay extends AbstractXMLPrimitiveType
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'gMonthDay';
    }
}