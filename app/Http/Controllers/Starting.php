<?php

namespace App\Http\Controllers;

use App\Models\UserGame;
use Illuminate\Http\Request;

class Starting extends Controller
{
    public function userResponce(Request $request) {
        $Tricolor_ID = $request->input("TricolorID");
        var_dump($Tricolor_ID);
        $user = UserGame::where("User_Tricolor_ID", $Tricolor_ID)->first();
        if ($user) {
            return response($user);
        } else {
            $userGame = new UserGame();
            $userGame->User_Tricolor_ID = $Tricolor_ID;
            $userGame->save();
            $userGame->statistics()->updateOrCreate([
                "User_ID" => $userGame->User_ID,
                'Game_time' => 0,
                'Longest_round' => 0,
                'Hardest_word' => '',
                'Rating_points' => '',
                'Progress_level' => 1,
            ]);
            return response($userGame);
        }       
    }
}
