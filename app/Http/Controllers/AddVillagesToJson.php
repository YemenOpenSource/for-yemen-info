<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\SimpleExcel\SimpleExcelReader;

class AddVillagesToJson extends Controller
{
    public function __invoke(Request $request)
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setNorm('all', true);

        $patternApostrophe = "/\'/"; // '
        $patternDash = "/-/"; // -

        $json = Storage::get("public/yemen-info.json");

        $yemenData = json_decode($json, true);

        $pathToCsv = storage_path('app/public/العزل-والقرى.csv');

        $rows = SimpleExcelReader::create($pathToCsv)->getRows();

        foreach($rows as $rowProperties){
            $districtCounter = 1;
            foreach ($yemenData['governorates'] as &$gov) {
                if ($gov['name_ar_normalized'] == $Arabic->arNormalizeText($rowProperties['المحافظة'])) {
                    foreach ($gov['districts'] as $i => &$district) {
                        if ($district['name_ar_normalized'] == $Arabic->arNormalizeText($rowProperties['المديرية'])) {
                            foreach ($district['uzaal'] as $i => &$uzlah) {
                                if ($uzlah['name_ar_normalized'] == $Arabic->arNormalizeText($rowProperties['العزلة'])) {
                                    $villageName = $rowProperties['القرية'];
                                    $uzlah['villages'][] = [
                                        "id" => 5555,
                                        "name_en" => $Arabic->ar2en($villageName),
                                        "name_ar" => $villageName,
                                        "name_ar_normalized" => $Arabic->arNormalizeText($villageName),
                                        "name_en_normalized" => preg_replace($patternApostrophe, "", $Arabic->ar2en(preg_replace($patternDash, " ", $Arabic->ar2en($villageName)))),
                                    ];
                                }
                            }
                            $districtCounter++;
                        }
                    }
                }
            }
        }
        return $yemenData;
    }
}
