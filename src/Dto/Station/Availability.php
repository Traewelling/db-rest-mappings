<?php

namespace DRM\Dto\Station;

class Availability
{
    public DayAvailability $monday;
    public DayAvailability $tuesday;
    public DayAvailability $wednesday;
    public DayAvailability $thursday;
    public DayAvailability $friday;
    public DayAvailability $saturday;
    public DayAvailability $sunday;
    public DayAvailability $holiday;
}
