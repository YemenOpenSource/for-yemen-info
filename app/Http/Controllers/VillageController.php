<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VillageController extends Controller
{
    public function __invoke(Request $request)
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setNorm('all', true);

        // 1. get the json file
        $json = Storage::get("public/yemen-info.json");

        // 2. read the json file
        $yemenData = collect(json_decode($json));

        // 3. loop over the governance

        foreach ($yemenData['governorates'] as  $gov) {
            // 4. loop over the districts

            foreach ($gov->districts as  $district) {
                echo $district->name_ar_normalized . "<br />";
            }
        }

        // 5. compare that all governance like the csv file
    }
}
