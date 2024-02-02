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

        $patternApostrophe = "/\'/"; // '
        $patternDash = "/-/"; // -

        // 1. get the json file
        $json = Storage::get("public/yemen-info.json",);

        // 2. read the json file
        $yemenData = json_decode($json, true);

        $districtCounter = 1;
        foreach ($yemenData['governorates'] as  &$gov) {
            // 4. loop over the districts
            // add new district
            $name = "ضواحي الأمانة سنحان وبني بهلول";
            $name_tashkeel = "ضَوَاحِي الأمَانَة سَنْحَان وبَنِي بُهْلُول";

            $firstEnNormalization = preg_replace($patternApostrophe, "", $Arabic->ar2en($name));
            $secondEnNormalization = preg_replace($patternDash, " ", $firstEnNormalization);

            // همدان
            $name2 = "ضواحي الأمانة همدان";
            $name_tashkeel2 = "ضَوَاحِي الأمَانَة هَمْدَان";

            $firstEnNormalization2 = preg_replace($patternApostrophe, "", $Arabic->ar2en($name2));
            $secondEnNormalization2 = preg_replace($patternDash, " ", $firstEnNormalization2);

            // if ($gov['id'] == 1) {
            //     $gov['districts'][] = [
            //         "id" => 11,
            //         "name_en" => $Arabic->ar2en($name),
            //         "name_ar" => $name,
            //         "name_ar_tashkeel" => $name_tashkeel,
            //         "name_ar_normalized" => $Arabic->arNormalizeText($name),
            //         "name_en_normalized" => $secondEnNormalization,
            //     ];

            //     $gov['districts'][] = [
            //         "id" => 12,
            //         "name_en" => $Arabic->ar2en($name2),
            //         "name_ar" => $name2,
            //         "name_ar_tashkeel" => $name_tashkeel2,
            //         "name_ar_normalized" => $Arabic->arNormalizeText($name2),
            //         "name_en_normalized" => $secondEnNormalization2,
            //     ];
            // }



            // dd($gov);
            foreach ($gov['districts'] as $i => &$district) {
                echo $district['name_ar_normalized'] . "<br />";
                // $districtCounter++;
            }
        }

        // 5. compare that all governance like the csv file

        // return $yemenData;
    }
}
