<?php

namespace garethp\ews\API;

use garethp\ews\API\Type\ExtendedPropertyType;
use garethp\ews\API\Type\PathToExtendedFieldType;

class ItemUpdateBuilder
{
    /**
     * @param string $itemType
     * @param string $uriType
     * @param array $changes
     * @return array
     */
    public static function buildUpdateItemChanges($itemType, $uriType, $changes)
    {
        $updateArray = [];

        if (isset($changes['deleteFields'])) {
            $updateArray['DeleteItemField'] = self::buildUpdateDeleteItemFields($uriType, $changes['deleteFields']);
            unset($changes['deleteFields']);
        }

        $updateArray['SetItemField'] = self::buildUpdateSetItemFields($itemType, $uriType, $changes);

        return $updateArray;
    }

    protected static function buildUpdateDeleteItemFields($uriType, $changes)
    {
        $deleteItemFields = [];
        foreach ($changes as $key) {
            if (self::isExtendedFieldURI($key)) {
                $deleteItemFields[] = ['ExtendedFieldURI' => self::getExtendedFieldURI($key)];
            } elseif (strpos($key, 'PhysicalAddress:') === 0 && $uriType == "contacts") {
                $deleteItemFields =
                    self::deleteContactPhysicalAddressField($key, $deleteItemFields);
            } else {
                list($fieldUriType, $fieldKey) = self::getFieldURI($uriType, $key);
                $deleteItemFields[] = [$fieldUriType => $fieldKey];
            }
        }

        return $deleteItemFields;
    }

    protected static function buildUpdateSetItemFields($itemType, $uriType, $changes)
    {
        $setItemFields = [];
        foreach ($changes as $key => $valueArray) {
            if ($key === 'ExtendedProperty') {
                foreach (self::normalizeExtendedProperties($valueArray) as $property) {
                    $setItemFields[] = [
                        'ExtendedFieldURI' => self::getExtendedFieldURI($property),
                        $itemType => ['ExtendedProperty' => $property]
                    ];
                }

                continue;
            }

            $valueArray = self::splitDictionaryUpdateEntries($valueArray);
            if (!is_array($valueArray) || Type::arrayIsAssoc($valueArray)) {
                $valueArray = array($valueArray);
            }

            foreach ($valueArray as $value) {
                list ($fieldUriType, $fieldKey, $valueKey, $value) = self::getFieldURI($uriType, $key, $value);
                $setItemFields[] = array(
                    $fieldUriType => $fieldKey,
                    $itemType => [$valueKey => $value]
                );
            }
        }

        return $setItemFields;
    }

    /**
     * Wraps a single extended property into a list
     *
     * @param array|ExtendedPropertyType $properties
     * @return array[]|ExtendedPropertyType[]
     */
    protected static function normalizeExtendedProperties(array|ExtendedPropertyType $properties): array
    {
        if (!is_array($properties) || Type::arrayIsAssoc($properties)) {
            return [$properties];
        }

        return $properties;
    }

    /**
     * Checks if the field is an extended property field
     *
     * @param mixed $field
     * @return bool
     */
    protected static function isExtendedFieldURI(mixed $field): bool
    {
        return $field instanceof PathToExtendedFieldType
            || (is_array($field) && isset($field['ExtendedFieldURI']));
    }

    /**
     * @param array|ExtendedPropertyType|PathToExtendedFieldType $field
     * @return array|PathToExtendedFieldType
     */
    protected static function getExtendedFieldURI(
        array|ExtendedPropertyType|PathToExtendedFieldType $field
    ): array|PathToExtendedFieldType {
        if ($field instanceof ExtendedPropertyType) {
            return $field->getExtendedFieldURI();
        }

        if (is_array($field) && isset($field['ExtendedFieldURI'])) {
            return $field['ExtendedFieldURI'];
        }

        return $field;
    }

    protected static function deleteContactPhysicalAddressField($key, $deleteItemFields)
    {
        $key = explode(":", $key);
        $dictionaryFields = FieldURIManager::getDictionaryURIFields();
        if (count($key) == 2 && !isset($dictionaryFields['physicaladdress']['contacts'][strtolower($key[1])])) {
            foreach ($dictionaryFields['physicaladdress']['contacts'] as $uriKey => $uri) {
                $deleteItemFields[] = ['IndexedFieldURI' => ['FieldURI' => $uri, 'FieldIndex' => $key[1]]];
            }
        } elseif (count($key) == 3 && isset($dictionaryFields['physicaladdress']['contacts'][strtolower($key[1])])) {
            $uri = $dictionaryFields['physicaladdress']['contacts'][strtolower($key[1])];
            $deleteItemFields[] = ['IndexedFieldURI' => ['FieldURI' => $uri, 'FieldIndex' => $key[2]]];
        }

        return $deleteItemFields;
    }

    protected static function splitDictionaryUpdateEntries($value)
    {
        if (!is_array($value)) {
            return $value;
        }

        reset($value);
        $fieldKey = key($value);

        if (!is_array($value[$fieldKey]) || empty($value[$fieldKey]['Entry'])) {
            return $value;
        }

        $entryKey = $value[$fieldKey]['Entry']['Key'];
        unset($value[$fieldKey]['Entry']['Key']);

        $newValue = [];
        foreach ($value[$fieldKey]['Entry'] as $key => $updateValue) {
            $newValue[] = [$fieldKey => ['Entry' => ['Key' => $entryKey, $key => $updateValue]]];
        }

        $value = $newValue;

        return $value;
    }

    protected static function getFieldURI($uriType, $key = null, $value = null)
    {
        if (strpos($key, ':') !== false) {
            try {
                $fieldUriValue = substr($key, 0, strpos($key, ':'));

                list ($key, $index) = explode(':', $key);

                if (is_array($value)) {
                    $key = key($value);
                    $value = $value[$key];
                }

                if (is_array($value) && !empty($value['Entry']) && is_array($value['Entry'])) {
                    $entryKey = $value['Entry']['Key'];
                    unset($value['Entry']['Key']);
                    reset($value['Entry']);

                    $fieldKey = key($value['Entry']);
                    $value['Entry']['Key'] = $entryKey;
                    $fieldUri = FieldURIManager::getIndexedFieldUriByName($fieldUriValue, $uriType, $fieldKey);
                } else {
                    $fieldUri = FieldURIManager::getIndexedFieldUriByName($fieldUriValue, $uriType);
                }

                return ['IndexedFieldURI', ['FieldURI' => $fieldUri, 'FieldIndex' => $index], $key, $value];
            } catch (\Exception $e) {
            }
        }

        $fullName = FieldURIManager::getFieldUriByName($key, $uriType);

        return ['FieldURI', ['FieldURI' => $fullName], $key, $value];
    }
}
