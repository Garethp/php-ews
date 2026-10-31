<?php

namespace garethp\ews\API;

use garethp\ews\API\Enumeration\DictionaryURIType;
use garethp\ews\API\Enumeration\UnindexedFieldURIType;

class FieldURIManager
{
    protected static $unIndexedFieldURIs = [];
    protected static $dictionaryFieldURIs = [];

    protected static function setupFieldUris()
    {
        if (!empty(self::$dictionaryFieldURIs) && !empty(self::$dictionaryFieldURIs)) {
            return;
        }

        self::$unIndexedFieldURIs = self::getFieldUrisFromClass(UnindexedFieldURIType::class);
        self::$dictionaryFieldURIs = self::getFieldUrisFromClass(DictionaryURIType::class);
    }

    public static function getDictionaryURIFields()
    {
        self::setupFieldUris();
        return self::$dictionaryFieldURIs;
    }

    protected static function getFieldUrisFromClass($className)
    {
        //So, since we have to pass in URI's of everything we update, we need to fetch them
        $reflection = new \ReflectionClass($className);
        $constants = $reflection->getConstants();
        $constantsFound = array();

        //Loop through all URI's to list them in an array
        foreach ($constants as $constant) {
            $exploded = explode(":", strtolower($constant));
            if (count($exploded) == 1) {
                $exploded = ['item', $exploded[0]];
            }

            //It starts in order ['contacts', 'physicaladdress', 'city], we want it in
            //['physicaladdress', 'contacts', 'city]
            $temp = $exploded[0];
            $exploded[0] = $exploded[1];
            $exploded[1] = $temp;

            $depth = count($exploded) - 1;
            $current = &$constantsFound;

            //Use the exploded array as a way to create a multidimensional array. For example,
            //['contacts', 'physicaladdress', 'city'] becomes
            //['contacts' => ['physicaladdress' => ['city' => 'contacts:PhysicalAddress:City']]]
            foreach ($exploded as $count => $key) {
                if ($count < $depth && !isset($current[$key])) {
                    $current[$key] = array();
                }

                if ($count < $depth) {
                    $current = &$current[$key];
                    continue;
                }

                $current[$key] = $constant;
            }
        }

        return $constantsFound;
    }

    public static function getFieldUriByName($fieldName, $preference = 'item')
    {
        self::setupFieldUris();
        $fieldName = strtolower($fieldName);
        $preference = strtolower($preference);

        if (!isset(self::$unIndexedFieldURIs[$fieldName])) {
            return false;
        }

        if (!isset(self::$unIndexedFieldURIs[$fieldName][$preference])) {
            $preference = 'item';
        }

        if (!isset(self::$unIndexedFieldURIs[$fieldName][$preference])) {
            throw new Exception("Could not find uri $preference:$fieldName");
        }

        return self::$unIndexedFieldURIs[$fieldName][$preference];
    }

    public static function getIndexedFieldUriByName($fieldName, $preference = 'item', $entryKey = false)
    {
        self::setupFieldUris();
        $fieldName = strtolower($fieldName);
        $preference = strtolower($preference);
        $entryKey = strtolower($entryKey);

        if (!isset(self::$dictionaryFieldURIs[$fieldName])) {
            return false;
        }

        if (!isset(self::$dictionaryFieldURIs[$fieldName][$preference])) {
            throw new Exception("Could not find uri $preference:$fieldName");
        }

        $fieldUri = self::$dictionaryFieldURIs[$fieldName][$preference];
        if (!is_array($fieldUri)) {
            return $fieldUri;
        }

        if (!$entryKey || !isset($fieldUri[$entryKey])) {
            throw new Exception("Could not find FieldURI");
        }

        return $fieldUri[$entryKey];
    }
}
