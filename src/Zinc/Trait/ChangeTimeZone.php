<?php
namespace App\Zinc\Trait;


    trait ChangeTimeZone
    {
        public function changeTimeZone($timezone) : void
        {
            date_default_timezone_set($timezone);
        }
    }