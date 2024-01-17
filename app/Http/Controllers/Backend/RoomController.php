<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    //
    public function index(){
        $data['roomList'] = DB::table('rooms')->get();
        // dd($data['roomList']);
        return view('backend.room.index', $data);
    }
}
