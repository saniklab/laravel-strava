<?php

# Nik Saiful Anuar
# 2022

namespace SanikLab\Strava;

use Illuminate\Support\Facades\Facade;

class StravaFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Strava';
    }

}
