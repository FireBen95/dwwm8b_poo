<?php
namespace App\Trait;

    trait changeTimeZone
    {
        public function changeTimeZone($timezone) : void
        {
            date_default_timezone_set($timezone);
        }
    }