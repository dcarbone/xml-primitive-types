<?php namespace DCarbone\XMLPrimitiveTypes\Types\Derived;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLEntity
 * @package DCarbone\XMLPrimitiveTypes\Types\Derived
 */
class XMLEntity extends XMLNCName
{
    /**
     * @return string
     */
    public function getXMLDataType()
    {
        return 'ENTITY';
    }
}