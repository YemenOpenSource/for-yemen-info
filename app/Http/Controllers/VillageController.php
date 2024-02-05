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

                if ($district['id'] == 22) {
                    // dd($district);

                    $name = "الجحادب";
                    $nameEnNorm = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name))));

                    $name2 = "الحطب";
                    $nameEnNorm2 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name2))));

                    $name3 = "الربع";
                    $nameEnNorm3 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name3))));

                    $name4 = "السدس";
                    $nameEnNorm4 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name4))));

                    $name5 = "الصوفه";
                    $nameEnNorm5 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name5))));

                    $name6 = "العجز";
                    $nameEnNorm6 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name6))));


                    $name7 = "المحيام";
                    $nameEnNorm7 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name7))));

                    $name8 = "بني القلام";
                    $nameEnNorm8 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name8))));

                    $name9 = "بني بجير";
                    $nameEnNorm9 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name9))));

                    $name10 = "بني جحدب";
                    $nameEnNorm10 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name10))));

                    $name11 = "بني سليمان";
                    $nameEnNorm11 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name11))));

                    $name12 = "بني شمهان";
                    $nameEnNorm12 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name12))));

                    $name13 = "بني عروة";
                    $nameEnNorm13 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name13))));

                    $name14 = "بني فراص";
                    $nameEnNorm14 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name14))));

                    $name15 = "بني وليد";
                    $nameEnNorm15 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name15))));

                    $name16 = "بيت ابن مهدي";
                    $nameEnNorm16 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name16))));

                    $name17 = "بيت الجريدي";
                    $nameEnNorm17 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name17))));

                    $name18 = "بيت العليي";
                    $nameEnNorm18 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name18))));

                    $name19 = "جحاله";
                    $nameEnNorm19 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name19))));

                    $name20 = "دروان";
                    $nameEnNorm20 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name20))));

                    $name21 = "سحاح";
                    $nameEnNorm21 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name21))));

                    $name22 = "سهام";
                    $nameEnNorm22 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name22))));

                    $name23 = "ضابي سهام";
                    $nameEnNorm23 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name23))));

                    $name24 = "مفحق";
                    $nameEnNorm24 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name24))));

                    $name25 = "وهبي";
                    $nameEnNorm25 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name25))));

                    $name26 = "يادع";
                    $nameEnNorm26 = preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($name26))));

                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name),
                        "name_ar" => $name,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name),
                        "name_en_normalized" => $nameEnNorm,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name2),
                        "name_ar" => $name2,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name2),
                        "name_en_normalized" => $nameEnNorm2,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name3),
                        "name_ar" => $name3,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name3),
                        "name_en_normalized" => $nameEnNorm3,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name4),
                        "name_ar" => $name4,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name4),
                        "name_en_normalized" => $nameEnNorm4,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name5),
                        "name_ar" => $name5,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name5),
                        "name_en_normalized" => $nameEnNorm5,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name6),
                        "name_ar" => $name6,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name6),
                        "name_en_normalized" => $nameEnNorm6,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name7),
                        "name_ar" => $name7,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name7),
                        "name_en_normalized" => $nameEnNorm7,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name8),
                        "name_ar" => $name8,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name8),
                        "name_en_normalized" => $nameEnNorm8,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name9),
                        "name_ar" => $name9,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name9),
                        "name_en_normalized" => $nameEnNorm9,
                    ];
                    // $district['uzaal'][] = [
                    //     "id" => 9999,
                    //     "name_en" => $Arabic->ar2en($name9),
                    //     "name_ar" => $name9,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name9),
                    //     "name_en_normalized" => $nameEnNorm9,
                    // ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name10),
                        "name_ar" => $name10,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name10),
                        "name_en_normalized" => $nameEnNorm10,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name11),
                        "name_ar" => $name11,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name11),
                        "name_en_normalized" => $nameEnNorm11,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name12),
                        "name_ar" => $name12,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name12),
                        "name_en_normalized" => $nameEnNorm12,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name13),
                        "name_ar" => $name13,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name13),
                        "name_en_normalized" => $nameEnNorm13,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name14),
                        "name_ar" => $name14,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name14),
                        "name_en_normalized" => $nameEnNorm14,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name15),
                        "name_ar" => $name15,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name15),
                        "name_en_normalized" => $nameEnNorm15,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name16),
                        "name_ar" => $name16,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name16),
                        "name_en_normalized" => $nameEnNorm16,
                    ];
                    // $district['uzaal'][] = [
                    //     "id" => 9999,
                    //     "name_en" => $Arabic->ar2en($name),
                    //     "name_ar" => $name,
                    //     "name_ar_normalized" => $Arabic->arNormalizeText($name),
                    //     "name_en_normalized" => $nameEnNorm,
                    // ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name17),
                        "name_ar" => $name17,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name17),
                        "name_en_normalized" => $nameEnNorm17,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name18),
                        "name_ar" => $name18,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name18),
                        "name_en_normalized" => $nameEnNorm18,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name19),
                        "name_ar" => $name19,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name19),
                        "name_en_normalized" => $nameEnNorm19,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name20),
                        "name_ar" => $name20,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name20),
                        "name_en_normalized" => $nameEnNorm20,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name21),
                        "name_ar" => $name21,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name21),
                        "name_en_normalized" => $nameEnNorm21,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name22),
                        "name_ar" => $name22,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name22),
                        "name_en_normalized" => $nameEnNorm22,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name23),
                        "name_ar" => $name23,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name23),
                        "name_en_normalized" => $nameEnNorm23,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name24),
                        "name_ar" => $name24,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name24),
                        "name_en_normalized" => $nameEnNorm24,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name25),
                        "name_ar" => $name25,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name25),
                        "name_en_normalized" => $nameEnNorm25,
                    ];
                    $district['uzaal'][] = [
                        "id" => 9999,
                        "name_en" => $Arabic->ar2en($name26),
                        "name_ar" => $name26,
                        "name_ar_normalized" => $Arabic->arNormalizeText($name26),
                        "name_en_normalized" => $nameEnNorm26,
                    ];
                    // dd($district);
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
