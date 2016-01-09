<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLBase64Binary
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
class XMLBase64Binary extends AbstractXMLPrimitiveType
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'base64Binary';
    }
}