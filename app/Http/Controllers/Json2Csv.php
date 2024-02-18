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
        $list = collect([
            [
                "governorate_name_en" => "Amant Al-Asmah",
                "governorate_name_ar" => "أمانة العاصمة",
                "governorate_name_ar_tashkeel" => "أَمانَة العاصِمَةِ",
                "governorate_phone_numbering_plan" => "01",
                "governorate_capital_name_ar" => "",
                "governorate_capital_name_en" => "",
                "governorate_name_ar_normalized" => "امانه العاصمه",
                "governorate_name_en_normalized" => "Amant Al Asmah",

                "district_name_en" => "Sana'a Al-qdimah",
                "district_name_ar" => "صنعاء القديمة",
                "district_name_ar_tashkeel" => "صَنْعاء القَدِيمَة",
                "district_name_ar_normalized" => "صنعاء القديمه",
                "district_name_en_normalized" => "Sanaa Al qdimah",

                "uzlah_name_en" => "Old City",
                "uzlah_name_ar" => "صنعاء القديمه",
                "uzlah_name_ar_normalized" => "صنعاء القديمه",
                "uzlah_name_en_normalized" => "Old City",

                "village_name_en" => "Al-Amanh",
                "village_name_ar" => "الامانة",
                "village_name_ar_normalized" => "الامانه",
                "village_name_en_normalized" => "Al Amanh"
            ],
        ]);

        // Export all users
        (new FastExcel($list))->export('file.csv');

        return;

        $json = Storage::get("public/yemen-info.json");
        $yemenData = json_decode($json, true);
        $counter = 1;

        foreach ($yemenData['governorates'] as $gov) {
            foreach ($gov['districts'] as $i => &$district) {
                if (isset($district['uzaal']) && is_array($district['uzaal'])) {
                    foreach ($district['uzaal'] as $uzlah) {
                        if (isset($uzlah['villages']) && is_array($uzlah['villages'])) {
                            foreach ($uzlah['villages'] as $village) {
                                echo $village['name_ar_normalized'] . "<br />";
                                $counter++;
                                dd('s');
                            }
                        }
                    }
                }
            }
        }
        // return $yemenData;
    }
}
