<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLHexBinary
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
class XMLHexBinary extends AbstractXMLPrimitiveType
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'hexBinary';
    }
}