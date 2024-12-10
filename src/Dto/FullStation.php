<?php

namespace DRM\Dto;


use DRM\Dto\Generics\Location;
use DRM\Dto\Generics\Operator;
use DRM\Dto\Station\Address;
use DRM\Dto\Station\DBInformation;
use DRM\Dto\Station\LocalServiceStaff;
use DRM\Dto\Station\Regionalbereich;
use DRM\Dto\Station\Ril100Identifier;
use DRM\Dto\Station\StationManagement;
use DRM\Dto\Station\Szentrale;
use DRM\Dto\Station\TimeTableOffice;

class FullStation
{
    public string               $type;
    public string               $id;
    /** @var string[] */
    public array                $additionalIds;
    public string               $ril100;
    public int                  $nr;
    public string               $name;
    public ?float                $weight = null;
    public ?Location $location = null;
    public ?Operator $operator = null;
    public ?Address           $address = null;
    public ?int                  $category = null;
    public ?int                  $priceCategory = null;
    public ?bool                 $hasParking = null;
    public ?bool                 $hasBicycleParking = null;
    public ?bool                 $hasLocalPublicTransport = null;
    public ?bool                 $hasPublicFacilities = null;
    public ?bool                 $hasLockerSystem = null;
    public ?bool                 $hasTaxiRank = null;
    public ?bool                 $hasTravelNecessities = null;
    public ?string               $hasSteplessAccess = null;
    public ?string               $hasMobilityService = null;
    public ?bool                 $hasWiFi = null;
    public ?bool                 $hasTravelCenter = null;
    public ?bool                 $hasRailwayMission = null;
    public ?bool                 $hasDBLounge = null;
    public ?bool                 $hasLostAndFound = null;
    public ?bool                 $hasCarRental = null;
    public ?string               $federalState = null;
    public ?Regionalbereich   $regionalbereich = null;
    /** @SuppressWarnings("php:S116") */
    public ?DBInformation     $DBinformation = null;
    public ?LocalServiceStaff $localServiceStaff = null;
    public ?TimeTableOffice   $timeTableOffice = null;
    public ?Szentrale         $szentrale = null;
    public ?StationManagement $stationManagement = null;
    /** @var Ril100Identifier[] */
    public array                $ril100Identifiers = [];
}
