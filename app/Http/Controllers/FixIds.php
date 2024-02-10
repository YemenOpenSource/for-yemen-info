<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FixIds extends Controller
{
    public function __invoke(Request $request)
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setNorm('all', true);

        $patternApostrophe = "/\'/"; // '
        $patternDash = "/-/"; // -

        $json = Storage::get("public/yemen-info.json");

        $yemenData = json_decode($json, true);

        $districtCounter = 1;
        $uzlahCounter = 1;
        $villageCounter = 1;
        foreach ($yemenData['governorates'] as &$gov) {
            foreach ($gov['districts'] as $i => &$district) {
                $district['id'] = $districtCounter++;
                if (isset($district['uzaal']) && is_array($district['uzaal'])) {
                    foreach ($district['uzaal'] as $i => &$uzlah) {
                        $uzlah['id'] = $uzlahCounter++;
                        if (isset($uzlah['villages']) && is_array($uzlah['villages'])) {
                            foreach ($uzlah['villages'] as $i => &$village) {
                                $village['id'] = $villageCounter++;
                                // echo $village['name_ar_normalized'] . "<br />";
                            }
                        }
                    }
                }
            }
        }
        return $yemenData;
    }
}
