<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLDuration
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
class XMLDuration extends AbstractXMLPrimitiveType
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'duration';
    }
}