<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaderDetail;

class LeaderController extends Controller
{
    // function LeaderPost(Request $request){

    //     $request->validate()([
    //         'cv' => ['required', 'mimes:pdf,png,jpg,jpeg'],
    //         'flazz_card' => ['required', 'mimes:pdf,png,jpg,jpeg'],
    //         'id_card' => ['required', 'mimes:pdf,png,jpg,jpeg'],
    //         'name' => ['required'],
    //         'email' => ['required', 'email', 'unique:tb_leader_details,email'],
    //         'whatsapp' => ['required', 'min:9', 'unique:tb_leader_details,whatsapp'],
    //         'github' => ['required'],
    //         'birth_place' => ['required'],
    //         'birth_date' => ['required'],
    //         'line' => ['required', 'unique:tb_leader_details,line'],
    //     ]);

    //     $filename = $request -> file('cv')->getClientOriginalName();
    //     $request->file('cv')->storeAs('/public'.'/'.$filename);

    //     $filename = $request -> file('flazz_card')->getClientOriginalName();
    //     $request->file('flazz_card')->storeAs('/public'.'/'.$filename);

    //     $filename = $request -> file('id_card')->getClientOriginalName();
    //     $request->file('id_card')->storeAs('/public'.'/'.$filename);

    //     Leader::create([
    //         'name' => $request -> name,
    //         'email' => $request -> email,
    //         'whatsapp' => $request -> whatsapp,
    //         'line' => $request -> line,
    //         'github' => $request -> github,
    //         'birth_date' => $request -> birth_date,
    //         'birth_place' => $request -> birth_place,
    //         'cv' => $filename,
    //         'flazz_card' => $filename,
    //         'id_card' => $filename,
    //     ]);

    //     return redirect('/register');
    // }
}
