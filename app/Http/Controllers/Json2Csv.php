<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Rap2hpoutre\FastExcel\FastExcel;


class Json2Csv extends Controller
{
    public function __invoke(Request $request)
    {
        $json = Storage::get("public/yemen-info-small.json");
        $yemenData = json_decode($json, true);

        $data = [];
        $items = [];

        foreach ($yemenData['governorates'] as $gov) {
            $data[] = [
                "governorate_name_en" => $gov["name_en"],
                "governorate_name_ar" => $gov["name_ar"],
                "governorate_name_ar_tashkeel" => $gov["name_ar_tashkeel"],
                "governorate_phone_numbering_plan" => $gov["phone_numbering_plan"],
                "governorate_capital_name_ar" => $gov["capital_name_ar"],
                "governorate_capital_name_en" => $gov["capital_name_en"],
                "governorate_name_ar_normalized" => $gov["name_ar_normalized"],
                "governorate_name_en_normalized" => $gov["name_en_normalized"],
            ];

            foreach ($gov['districts'] as $district) {
                $data[] = [
                    "district_name_en" => $district['name_en'],
                    "district_name_ar" => $district['name_ar'],
                    "district_name_ar_tashkeel" => $district['name_ar_tashkeel'],
                    "district_name_ar_normalized" => $district['name_ar_normalized'],
                    "district_name_en_normalized" => $district['name_en_normalized'],
                ];
                // dd($data);
                if (isset($district['uzaal']) && is_array($district['uzaal'])) {
                    foreach ($district['uzaal'] as $uzlah) {
                        $data[] = [
                            "uzlah_name_en" => $uzlah["name_en"],
                            "uzlah_name_ar" => $uzlah["name_ar"],
                            "uzlah_name_ar_normalized" => $uzlah["name_ar_normalized"],
                            "uzlah_name_en_normalized" => $uzlah["name_en_normalized"],
                        ];
                        if (isset($uzlah['villages']) && is_array($uzlah['villages'])) {
                            foreach ($uzlah['villages'] as $village) {
                                $data[] = [
                                    "village_name_en" => $village["name_en"],
                                    "village_name_ar" => $village["name_ar"],
                                    "village_name_ar_normalized" => $village["name_ar_normalized"],
                                    "village_name_en_normalized" => $village["name_en_normalized"],
                                ];
                            }
                            // dd($data,$this->flattenArray($data));
                            // $items[] = $this->flattenArray($data);
                            $items[] = $data;
                            // dd($items);
                        } else {
                            $data[] = [
                                "village_name_en" => "",
                                "village_name_ar" => "",
                                "village_name_ar_normalized" => "",
                                "village_name_en_normalized" => "",
                            ];
                            // $items[] = $this->flattenArray($data);
                            $items[] = $data; // Add the uzlah data without village to the items array

                        }
                    }
                } else {
                    $data[] = [
                        "uzlah_name_en" => "",
                        "uzlah_name_ar" => "",
                        "uzlah_name_ar_normalized" => "",
                        "uzlah_name_en_normalized" => "",
                        "village_name_en" => "",
                        "village_name_ar" => "",
                        "village_name_ar_normalized" => "",
                        "village_name_en_normalized" => "",
                    ];

                    $items[] = $this->flattenArray($data);
                }
            }
        }

        dd($items);

        // (new FastExcel($list))->export('file.csv');
    }


    private function flattenArray($array)
    {
        $flattenedArray = [];
        foreach ($array as $item) {
            $flattenedArray = array_merge($flattenedArray, $item);
        }
        return $flattenedArray;
    }
}
