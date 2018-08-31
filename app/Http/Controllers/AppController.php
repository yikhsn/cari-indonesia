<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Village, District, Regency, Province };

class AppController extends Controller
{
    public function index()
    {
        return Province::with('regencies.districts.villages')->get();
    }

    public function desa(Village $village)
    {
        $village = Village::with('district.regency.province')
                        ->find($village)
                        ->all();

        return $village;
    }

    public function kecamatan(District $district)
    {
        $district = District::with('villages', 'regency.province')
                        ->find($district)
                        ->all();

        return $district;
    }

    public function kabupaten(Regency $regency)
    {
        $regency = Regency::with('districts.villages', 'province')
                        ->find($regency)
                        ->all();
        
        return $regency;
    }

    public function provinsi(Province $province)
    {
        $province = Province::with('regencies.districts.villages')
                        ->find($province)
                        ->all();
        
        return $province;
    }
}
