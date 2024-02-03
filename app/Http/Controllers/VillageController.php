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

                if ($district['id'] == 159) {
                    // dd($district);

                    $name = "مدينة البيضاء";
                    $nameEnNorm = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name))));

                    // $name2 = "الجدعان";
                    // $nameEnNorm2 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name2))));

                    // $name3 = "الحدب";
                    // $nameEnNorm3 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name3))));

                    // $name4 = "بلاد القبائل";
                    // $nameEnNorm4 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name4))));

                    // $name5 = "بني الحذيفي";
                    // $nameEnNorm5 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name5))));

                    // $name6 = "بني السياغ";
                    // $nameEnNorm6 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name6))));


                    // $name7 = "بني النمري";
                    // $nameEnNorm7 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name7))));

                    // $name8 = "بني عمرو";
                    // $nameEnNorm8 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name8))));

                    // $name9 = "بني مهلهل";
                    // $nameEnNorm9 = preg_replace($patternApostrophe,"",$Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name9))));

                    $district['uzaal'][] = [
                        "id" => 8888,
                        "name_en" => $Arabic->ar2en($name),
                        "name_ar" => $name,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name),
                        "name_en_normalized" => $nameEnNorm,
                    ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name2),
                    //     "name_ar" => $name2,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name2),
                    //     "name_en_normalized" => $nameEnNorm2,
                    // ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name3),
                    //     "name_ar" => $name3,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name3),
                    //     "name_en_normalized" => $nameEnNorm3,
                    // ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name4),
                    //     "name_ar" => $name4,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name4),
                    //     "name_en_normalized" => $nameEnNorm4,
                    // ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name5),
                    //     "name_ar" => $name5,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name5),
                    //     "name_en_normalized" => $nameEnNorm5,
                    // ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name6),
                    //     "name_ar" => $name6,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name6),
                    //     "name_en_normalized" => $nameEnNorm6,
                    // ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name7),
                    //     "name_ar" => $name7,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name7),
                    //     "name_en_normalized" => $nameEnNorm7,
                    // ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name8),
                    //     "name_ar" => $name8,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name8),
                    //     "name_en_normalized" => $nameEnNorm8,
                    // ];

                    // $district['uzaal'][] = [
                    //     "id" => 7777,
                    //     "name_en" => $Arabic->ar2en($name9),
                    //     "name_ar" => $name9,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name9),
                    //     "name_en_normalized" => $nameEnNorm9,
                    // ];
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
