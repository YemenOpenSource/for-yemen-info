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
                // echo $district['id'] . ' ';
                // echo $district['name_ar_normalized'] . ' <br/>';

                if ($district['id'] == 63) {
                    $name = "اسبيل";
                    $enNorm = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name))));

                    $name2 = "الاثلاء";
                    $enNorm2 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name2))));

                    $name3 = "عنس السلامة";
                    $enNorm3 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name3))));

                    $district['uzaal'][] = [
                        "id" => 5555,
                        "name_en" => $Arabic->ar2en($name),
                        "name_ar" => $name,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name),
                        "name_en_normalized" => $enNorm,
                    ];
                    $district['uzaal'][] = [
                        "id" => 5555,
                        "name_en" => $Arabic->ar2en($name2),
                        "name_ar" => $name2,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name2),
                        "name_en_normalized" => $enNorm2,
                    ];
                    $district['uzaal'][] = [
                        "id" => 5555,
                        "name_en" => $Arabic->ar2en($name3),
                        "name_ar" => $name3,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name3),
                        "name_en_normalized" => $enNorm3,
                    ];
                }

                if (isset($district['uzaal']) && is_array($district['uzaal'])) {
                    foreach ($district['uzaal'] as &$uzlah) {
                        if (array_key_exists('name_ar_normalized', $uzlah)) {
                            // echo $gov['name_ar_normalized'] . ' > ';
                            // echo $district['name_ar_normalized']  . ' > ';
                            // echo $uzlah['id'] . ': ';
                            // echo $uzlah['name_ar_normalized'] . "<br />";
                        }
                    }
                }
                // echo '<br />';
                // $districtCounter++;
            }
        }

        // 5. compare that all governance like the csv file

        return $yemenData;
    }
}
