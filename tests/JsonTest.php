<?php

declare(strict_types=1);

use DRM\Dto\FullStation;
use DRM\Dto\Stop;
use DRM\Dto\Trip;
use DRM\Hydrator\DbRestHydrator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{

    public static function jsonDataProvider(): array
    {
        return [
            ['departures.json', Trip::class],
            ['departures_2.json', Trip::class],
            ['locations.json', Stop::class],
            ['stations_nearby.json', Stop::class],
        ];
    }

    public static function singleObjectJsonDataProvider(): array
    {
        return [
            ['stations_ril.json', FullStation::class],
            ['stations_ibnr.json', FullStation::class],
            ['stops_station.json', Stop::class],
            ['stops_stop.json', Stop::class],
        ];
    }

    #[DataProvider('jsonDataProvider')]
    public function testJson($file, $class)
    {
        $json = file_get_contents(__DIR__ . '/_data/'. $file);
        $data = json_decode($json, true);
        $this->assertIsArray($data);

        $trips = [];
        foreach ($data as $trip) {
            $trips[] = (new DbRestHydrator())->hydrate($trip, $class);
        }
        $trips = json_encode($trips, JSON_PRETTY_PRINT);
        $this->assertJsonStringEqualsJsonString($json, $trips);
    }

    #[DataProvider('singleObjectJsonDataProvider')]
    public function testObjectJsons($file, $class)
    {
        $json = file_get_contents(__DIR__ . '/_data/'. $file);
        $data = json_decode($json, true);
        $this->assertIsArray($data);

        $object = (new DbRestHydrator())->hydrate($data, $class);
        $object = json_encode($object, JSON_PRETTY_PRINT);
        $this->assertJsonStringEqualsJsonString($json, $object);
    }
}
