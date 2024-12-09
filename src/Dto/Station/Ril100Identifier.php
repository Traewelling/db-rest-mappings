<?php

namespace DRM\Dto\Station;

class Ril100Identifier
{
    public string $rilIdentifier;
    public bool $isMain;
    public bool $hasSteamPermission;
    public GeographicCoordinates $geographicCoordinates;
}
