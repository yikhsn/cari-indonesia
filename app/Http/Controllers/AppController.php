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
        return Village::with('district.regency.province')
                        ->find($village)
                        ->first();
    }

    public function kecamatan(District $district)
    {
        return District::with('villages', 'regency.province')
                        ->find($district)
                        ->first();
    }

    public function kabupaten(Regency $regency)
    {
        return Regency::with('districts.villages', 'province')
                        ->find($regency)
                        ->first();
    }

    public function provinsi(Province $province)
    {
        return Province::with('regencies.districts.villages')
                        ->find($province)
                        ->first();
    }
}
