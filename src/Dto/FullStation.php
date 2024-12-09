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
        public float                $weight;
        public Location $location;
        public Operator $operator;
        public Address           $address;
        public int                  $category;
        public int                  $priceCategory;
        public bool                 $hasParking;
        public bool                 $hasBicycleParking;
        public bool                 $hasLocalPublicTransport;
        public bool                 $hasPublicFacilities;
        public bool                 $hasLockerSystem;
        public bool                 $hasTaxiRank;
        public bool                 $hasTravelNecessities;
        public string               $hasSteplessAccess;
        public string               $hasMobilityService;
        public bool                 $hasWiFi;
        public bool                 $hasTravelCenter;
        public bool                 $hasRailwayMission;
        public bool                 $hasDBLounge;
        public bool                 $hasLostAndFound;
        public bool                 $hasCarRental;
        public string               $federalState;
        public Regionalbereich   $regionalbereich;
        /** @SuppressWarnings("php:S116") */
        public DBInformation     $DBinformation;
        public LocalServiceStaff $localServiceStaff;
        public TimeTableOffice   $timeTableOffice;
        public Szentrale         $szentrale;
        public StationManagement $stationManagement;
        /** @var Ril100Identifier[] */
        public array                $ril100Identifiers;
}
