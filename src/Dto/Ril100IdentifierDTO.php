<?php

namespace DRM\Dto;

class Ril100IdentifierDTO
{
    public string $rilIdentifier;
    public bool $isMain;
    public bool $hasSteamPermission;
    public GeographicCoordinatesDTO $geographicCoordinates;
}
