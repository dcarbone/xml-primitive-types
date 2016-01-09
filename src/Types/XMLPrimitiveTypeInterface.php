<?php namespace DCarbone\XMLPrimitiveTypes\Types;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Interface XMLPrimitiveTypeInterface
 * @package DCarbone\XMLPrimitiveTypes\Types
 */
interface XMLPrimitiveTypeInterface
{
    /**
     * @return string
     */
    public function getXMLDataType();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function __toString();
}