<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;

class petController extends Controller
{
    public function dbdata() {
        // fetch data send from arduino using GET method
        $_pid = "1";
        $_bpm = $_GET['bpm'];
        $_temp = $_GET['temp'];
        $_movement = $_GET['movement'];
        $_ifActive = $_GET['finger'];

        // insert sensor value to database
        $data=array('pid'=>$_pid, 'bpm'=>$_bpm,"temp"=>$_temp,"movement"=>$_movement,"ifActive"=>$_ifActive);
        DB::table('pet_status')->insert($data);
    }


    public function add(Request $request) {

        $sid = 1;
        $uid = auth()->id();
        $petname = $request->input('petname');
        $gender = $request->input('gender');
        $breed = $request->input('breed');
        $color = $request->input('color');
        $birthday = $request->input('birthday');
        $age = Carbon::now()->diffInMonths($birthday);

        $petdata=array('sid'=>$sid,'uid'=>$uid,'name'=>$petname,"gender"=>$gender,"breed"=>$breed,"color"=>$color,"birthday"=>$birthday,"age"=>$age);
        DB::table('pet')->insert($petdata);

        return redirect('dashboard')->with('message', 'Your Pet is added');
    }

    public function getDetails($id)
{

    $details = DB::select('select * from pet');
    return view('main.details', ['detail' => $details]);

}




}
