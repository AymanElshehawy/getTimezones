<?php

/**
 * Created by PhpStorm.
 * User: AymanZayed
 * Date: 9/25/2017
 * Time: 1:55 PM
 */
class timezone
{
    /**
     * get timezones lists
     * @return array
     */
    public function GetTimezonesList()
    {
        $zones = [];
        $timestamp = time();
        foreach(timezone_identifiers_list() as $zone) {
            date_default_timezone_set($zone);
            $zones[$zone] = $zone.' UTC/GMT ' . date('P', $timestamp);
        }
        return $zones;
    }
}