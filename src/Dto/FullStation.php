<?php

namespace DRM\Dto;


class FullStation
{
        public string               $type;
        public string               $id;
        public array                $additionalIds;
        public string               $ril100;
        public int                  $nr;
        public string               $name;
        public float                $weight;
        public Location $location;
        public Operator $operator;
        public AddressDTO           $address;
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
        public RegionalbereichDTO   $regionalbereich;
        /** @SuppressWarnings("php:S116") */
        public DBInformationDTO     $DBinformation;
        public LocalServiceStaffDTO $localServiceStaff;
        public TimeTableOfficeDTO   $timeTableOffice;
        public SzentraleDTO         $szentrale;
        public StationManagementDTO $stationManagement;
        public array                $ril100Identifiers;
}
