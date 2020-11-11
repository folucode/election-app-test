<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use Illuminate\Http\Request;

class LgaController extends Controller
{
    public function getResults($id = 1)
    {
        $lga = Lga::find($id);
        $lgas = Lga::all();

        $parties_score = [];

        $message = '';

        if ($lga === null) {
            $message = "No result for this LGA";
        } else {
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

        $scores = (array) $parties_score;

        if (count($scores) === 0) {
            $message = "No result for this LGA";
        }

        return view('lga_results', compact(['scores', 'lgas', 'lga', 'message']));
    }
}
