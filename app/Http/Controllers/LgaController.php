<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use Illuminate\Http\Request;

class LgaController extends Controller
{
    public function getResults()
    {
        $lga = Lga::find(19);

        $parties_score = [];

        foreach ($lga->getPollingUnits as $pollingUnit) {

            foreach ($pollingUnit->getResult as $result) {

                if (isset($parties_score[$result->party_abbreviation])) {
                    if (in_array($parties_score[$result->party_abbreviation], $parties_score)) {
                        $parties_score[$result->party_abbreviation] += $result->party_score;
                        continue;
                    }
                }

                $parties_score[$result->party_abbreviation] = $result->party_score;

            }
        }
    }
}
