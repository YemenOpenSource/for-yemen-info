<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelReader;

class FromExcel extends Controller
{
    public function __invoke(Request $request)
    {
        $Arabic = new \ArPHP\I18N\Arabic();
        $Arabic->setNorm('all', true);

        $patternApostrophe = "/\'/"; // '
        $patternDash = "/-/"; // -

        $pathToCsv = storage_path('app/public/العزل-والقرى.csv');

        $rows = SimpleExcelReader::create($pathToCsv)->getRows();

        $rows->each(function(array $rowProperties) use ($Arabic) {
            echo $Arabic->arNormalizeText($rowProperties['القرية']) . "<br />";
         });

    }
}
