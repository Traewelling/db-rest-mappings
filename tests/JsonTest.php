<?php

declare(strict_types=1);

use DRM\Dto\Location;
use DRM\Dto\Stop;
use DRM\Dto\Trip;
use DRM\Hydrator\DbRestHydrator;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    public function testJsonIdentical()
    {
        $json = file_get_contents(__DIR__ . '/_data/departures.json');
        $data = json_decode($json, true);
        $this->assertIsArray($data);

        //$trips = array_map(fn($trip) => new Trip($trip), $data);
        $trips = [];
        foreach ($data as $trip) {
            $trips[] = (new DbRestHydrator())->hydrate($trip, Trip::class);
        }
        $trips = json_encode($trips, JSON_PRETTY_PRINT);
        $this->assertJsonStringEqualsJsonString($json, $trips);
    }

    public function testJsonLocationsIdentical()
    {
        $json = file_get_contents(__DIR__ . '/_data/locations.json');
        $data = json_decode($json, true);
        $this->assertIsArray($data);

        $locations = [];
        foreach ($data as $location) {
            $locations[] = (new DbRestHydrator())->hydrate($location, Stop::class);
        }
        $locations = json_encode($locations, JSON_PRETTY_PRINT);
        $this->assertJsonStringEqualsJsonString($json, $locations);
    }

    public function testJsonStationsNearbyIdentical()
    {
        $json = file_get_contents(__DIR__ . '/_data/stations_nearby.json');
        $data = json_decode($json, true);
        $this->assertIsArray($data);

        $stations = [];
        foreach ($data as $station) {
            $stations[] = (new DbRestHydrator())->hydrate($station, Stop::class);
        }
        $stations = json_encode($stations, JSON_PRETTY_PRINT);
        $this->assertJsonStringEqualsJsonString($json, $stations);
    }
}
