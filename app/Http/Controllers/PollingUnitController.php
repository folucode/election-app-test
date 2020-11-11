<?php

namespace App\Http\Controllers;

use App\Models\AnnouncedPuResults;
use App\Models\Lga;
use App\Models\Party;
use App\Models\PollingUnit;
use App\Models\Ward;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class PollingUnitController extends Controller
{

    public function getResults($id = 8)
    {
        $results = PollingUnit::find($id);
        $polling_units = PollingUnit::all();

        return view('polling_units_results', compact(['results', 'polling_units']));
    }

    public function newPollingUnitView()
    {
        $wards = Ward::all();
        $lgas = Lga::all();

        return view('new_polling_unit', compact(['wards', 'lgas']));
    }

    public function addNewPollingUnit(Request $request, Faker $faker)
    {

        $ward_params = explode(',', $request->ward);
        $lga_params = explode(',', $request->lga);

        $polling_unit = new PollingUnit();
        $polling_unit->polling_unit_id = rand(1, 20);
        $polling_unit->ward_id = $ward_params[1];
        $polling_unit->lga_id = $lga_params[1];
        $polling_unit->uniquewardid = $ward_params[0];
        $polling_unit->polling_unit_number = $request->polling_unit_number;
        $polling_unit->polling_unit_name = $request->polling_unit_name;
        $request->polling_unit_description = $request->polling_unit_description;
        $polling_unit->lat = $faker->latitude($min = -90, $max = 90);
        $polling_unit->long = $faker->longitude($min = -180, $max = 180);
        $polling_unit->entered_by_user = $request->user_name;
        $polling_unit->date_entered = date("Y/m/d");
        $polling_unit->user_ip_address = $faker->ipv4();
        $polling_unit->save();

        return back()->with('message', 'polling unit added');
    }

    public function newResultView()
    {
        $polling_units = PollingUnit::all();
        $parties = Party::all();

        return view('new_result', compact(['polling_unit', 'parties']));
    }

    public function addNewResult(Request $request, Faker $faker)
    {
        $result = new AnnouncedPuResults();
        $result->polling_unit_uniqueid = $request->polling_unit;
        $result->party_abbreviation = $request->party;
        $result->party_score = $request->party_score;
        $result->entered_by_user = $request->user_name;
        $result->date_entered = date("Y/m/d");
        $result->user_ip_address = $faker->ipv4();
        $result->save();

        return back()->with('message', 'result added');
    }
}
