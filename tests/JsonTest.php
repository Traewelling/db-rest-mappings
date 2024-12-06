<?php

declare(strict_types=1);

use DRM\Trip;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    public function testJsonIdentical()
    {
        $json = file_get_contents(__DIR__ . '/_data/departures.json');
        $data = json_decode($json, true);
        $this->assertIsArray($data);

        $trips = array_map(fn($trip) => new Trip($trip), $data);
        $trips = json_encode($trips, JSON_PRETTY_PRINT);
        $this->assertJsonStringEqualsJsonString($json, $trips);
    }
}
