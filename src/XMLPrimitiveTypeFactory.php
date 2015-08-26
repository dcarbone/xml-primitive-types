<?php namespace DCarbone\XMLPrimitiveTypes;

/*
 * PHP XML Primitives
 * Copyright (C) 2015  Daniel Paul Carbone
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

/**
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