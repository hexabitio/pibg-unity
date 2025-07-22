<?php

namespace App\Helpers;

use Odan\Tsid\TsidFactory;

class TsIdGenerator
{
    /**
     * Generate a time-sorted unique ID as integer
     * 
     * @return int The TSID as integer
     */
    public static function generate(): int
    {
        $factory = new TsidFactory();
        $tsid = $factory->generate();

        return $tsid->toInt();
    }

    /**
     * Generate a time-sorted unique ID as string
     * 
     * @return string The TSID as a string representation
     */
    public static function generateStr(): string
    {
        $factory = new TsidFactory();
        $tsid = $factory->generate();

        return $tsid->toString();
    }

    /**
     * Generate multiple time-sorted integer unique IDs
     * 
     * @param int $count Number of IDs to generate
     * @return array Array of TSID integers
     */
    public static function generateMultiple(int $count): array
    {
        $factory = new TsidFactory();
        $ids = [];

        for ($i = 0; $i < $count; $i++) {
            $tsid = $factory->generate();
            $ids[] = $tsid->toInt();
        }

        return $ids;
    }

    /**
     * Generate multiple time-sorted string unique IDs
     * 
     * @param int $count Number of IDs to generate
     * @return array Array of TSID string
     */
    public static function generateMultipleStr(int $count): array
    {
        $factory = new TsidFactory();
        $ids = [];

        for ($i = 0; $i < $count; $i++) {
            $tsid = $factory->generate();
            $ids[] = $tsid->toString();
        }

        return $ids;
    }
}
