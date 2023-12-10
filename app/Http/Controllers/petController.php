<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class petController extends Controller
{
    public function dbdata() {
        // fetch data send from arduino using GET method
        $_pid = "1";
        $_bpm = $_GET['bpm'];
        $_temp = $_GET['temp'];
        $_movement = $_GET['movement'];

        // insert sensor value to database
        $data=array('pid'=>$_pid, 'bpm'=>$_bpm,"temp"=>$_temp,"movement"=>$_movement);
        DB::table('pet_status')->insert($data);
    }



}
