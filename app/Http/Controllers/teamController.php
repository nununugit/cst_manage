<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teamController extends Controller
{
    public function team($team_id){
        $team_counts = DB::table('sort')
        ->where('done', '=', 0 )
        ->where('group_gid','=',$team_id)->get();

        $team_name =  DB::table('groups')
        ->select('gname')
        ->where('gid','=',$team_id)->first();

        return view('team_point',['team_counts'=>$team_counts,'team_name'=>$team_name]);
    }
    public function team_discount(Request $request)
    {
        $id = $request->id;
        $gid = $request->gid;

        DB::table('sort')
        ->whereRaw('id = ? AND done = ?',[ $id , 0 ])
        ->update(['done' => 1]);

        return redirect('/cst2020/manage/'.$gid.'');

    }
}
