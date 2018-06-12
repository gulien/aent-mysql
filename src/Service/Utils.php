<?php

namespace TheAentMachine\AentMysql\Service;

class Utils
{
    /**
     * Delete all key/value pairs with empty value by recursively using array_filter
     * @param array $input
     * @return mixed[] array
     */
    public static function arrayFilterRec(array $input): array
    {
        foreach ($input as &$value) {
            if (\is_array($value)) {
                $value = self::arrayFilterRec($value);
            }
        }
        return array_filter($input);
    }
}
