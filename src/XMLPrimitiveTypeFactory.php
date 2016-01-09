<?php namespace DCarbone\XMLPrimitiveTypes;

/**
 * Copyright 2015 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Class XMLPrimitiveTypeFactory
 * @package DCarbone\XMLPrimitiveTypes
 */
class XMLPrimitiveTypeFactory
{
    /**
     * Constructor
     *
     * @param string|null $cacheDir
     */
    public function __construct($cacheDir = null)
    {
        if (null === $cacheDir)
            $cacheDir = sprintf('%s/../cache', __DIR__);

        if (is_string($cacheDir) && is_dir($cacheDir) && is_readable($cacheDir) && is_writable($cacheDir))
        {
            $cacheFile = sprintf('%s/XMLPrimitiveTypeMap.php', rtrim($cacheDir, "/\\"));
            if (!file_exists($cacheFile))
            {
                if (!XMLPrimitiveTypeCacheGenerator::generateCache($cacheDir))
                    throw new \RuntimeException('Unable to create Primitive Type Class Map cache, please check PHP logs for more information.');
            }

            require $cacheFile;
        }
        else
        {
            throw new \RuntimeException(sprintf('Invalid cache directory "%s" seen.  The input is either not a string, not a valid path, not a directory, or not readable & writable.', $cacheDir));
        }
    }

    /**
     * @param string $xmlDataType
     * @param mixed $value
     * @return Types\AbstractXMLPrimitiveType
     */
    public function getPrimitiveType($xmlDataType, $value = null)
    {
        if (isset(XMLPrimitiveTypeMap::$_typeMap[$xmlDataType]))
            $class = XMLPrimitiveTypeMap::$_typeMap[$xmlDataType];
        else if (($lower = strtolower($xmlDataType)) && isset(XMLPrimitiveTypeMap::$_lowerTypeMap[$lower]))
            $class = XMLPrimitiveTypeMap::$_lowerTypeMap[$lower];
        else
            throw new \InvalidArgumentException(sprintf('Unknown XML Primitive type "%s" requested.', $xmlDataType));

        return new $class($value);
    }
}