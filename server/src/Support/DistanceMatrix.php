<?php

namespace Fleetbase\FleetOps\Support;

/**
 * A utility class for calculating driving distances and times using the Google Distance Matrix API.
 *
 * This class provides methods for calculating the driving distance and time between two points, as well
 * as between multiple points using the Google Distance Matrix API. The results are returned in meters
 * for distance and seconds for time.
 *
 * @category Utility
 *
 * @license  https://opensource.org/licenses/MIT MIT License
 * @author   Ronald A. Richardson
 */
class DistanceMatrix
{
    public ?float $distance;
    public ?int $time;

    public function __construct(?float $distance, ?int $time)
    {
        $this->distance = $distance;
        $this->time     = $time;
    }
}
