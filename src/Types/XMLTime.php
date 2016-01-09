<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLTime
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
class XMLTime extends AbstractXMLPrimitiveType
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'time';
    }
}