<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class truncateController extends Controller
{
    public function attack(){        
        $team_names = DB::table('groups')->get();
        return view('attack',['team_names'=>$team_names]);
    }

    public function attack_success($team_id)
    {
        DB::table('roulette')->join('users','users.id', '=','roulette.user_id')
                    ->where('group_gid','=',$team_id)
                    ->update(['number'=>100]);
       
        DB::table('ac')->join('users','users.id', '=','ac.user_id')
        ->where('group_gid','=',$team_id)
        ->update(['rouletted'=>1]);

        return redirect('/manage/attack');
    }
}
