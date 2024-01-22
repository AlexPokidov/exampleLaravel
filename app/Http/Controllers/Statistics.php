<?php

namespace App\Http\Controllers;

use App\Models\Statistics as ModelsStatistics;
use App\Models\UserGame;
use Illuminate\Http\Request;

class Statistics extends Controller
{
    public function statResponce(Request $request) {
        $Tricolor_ID = $request->input("TricolorID");
        var_dump($Tricolor_ID);
        $user = UserGame::where("User_Tricolor_ID", $Tricolor_ID)->first();

        $userTopStat = ModelsStatistics::orderBy('Rating_points', 'DESC')->limit(2)->get();

        $userTopStat = json_encode($userTopStat);
        
        return $userTopStat;
    }
}
