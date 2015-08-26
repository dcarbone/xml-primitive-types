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
 * Class XMLPrimitiveTypeCacheGenerator
 * @package DCarbone\XMLPrimitiveTypes
 */
abstract class XMLPrimitiveTypeCacheGenerator
{
    /**
     * @param string $cacheDir
     * @return bool
     */
    public static function generateCache($cacheDir)
    {
        $baseDir = sprintf('%s/Types', __DIR__);
        $classMap = array();
        $lowercaseClassMap = array();
        foreach(array_merge(glob(sprintf('%s/*.php', $baseDir), GLOB_NOSORT), glob(sprintf('%s/Derived/*.php', $baseDir), GLOB_NOSORT)) as $classFile)
        {
            if (false === strpos($classFile, 'Derived'))
                $ns = 'DCarbone\\XMLPrimitiveTypes\\Types\\';
            else
                $ns = 'DCarbone\\XMLPrimitiveTypes\\Types\\Derived\\';

            $classname = substr(basename($classFile), 0, -4);
            if (false === strpos($classname, 'Abstract'))
            {
                /** @var \DCarbone\XMLPrimitiveTypes\Types\AbstractXMLPrimitiveType $obj */

                $nsClass = sprintf('%s%s', $ns, $classname);
                $obj = new $nsClass;

                $dataType = $obj->getXMLDataType();
                $classMap[$dataType] = $nsClass;
                $lowercaseClassMap[strtolower($dataType)] = $nsClass;
            }
        }

        $classMap = var_export($classMap, true);
        $lowercaseClassMap = var_export($lowercaseClassMap, true);

        $today = date(\DateTime::ATOM);
        $year = date('Y');
        $mapClass = <<<STRING
<?php namespace DCarbone\\XMLPrimitiveTypes;

/*
 * PHP XML Primitives
 * Copyright (C) {$year}  Daniel Paul Carbone
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
 * Class XMLPrimitiveTypeMap
 * @package DCarbone\\XMLPrimitiveTypes
 *
 * This class is auto-generated, DO NOT EDIT!
 * Timestamp: {$today}
 */
abstract class XMLPrimitiveTypeMap
{
    public static \$_typeMap = {$classMap};
    public static \$_lowerTypeMap = {$lowercaseClassMap};
}
STRING;

        return (bool)file_put_contents(sprintf('%s/XMLPrimitiveTypeMap.php', $cacheDir), $mapClass);
    }
}