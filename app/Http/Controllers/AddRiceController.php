<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddRiceController extends Controller
{
    public function add() {
        $user = Auth::user();
        return view('addRice', compact('user'));
    }

    public function new() {
        $departure = $_POST['departure'];
        $destination = $_POST['destination'];
        $departure_time = $_POST['departure_time'];
        $arrival_time = $_POST['arrival_time'];
        $weekdays = $_POST['weekdays'];
        $delete_time = $_POST['delete_time'];
        $means_of_transport = $_POST['means_of_transport'];
        $places = $_POST['places'];
      
        DB::insert('insert into rices (departure, destination, departure_time, weekdays, delete_time, arrival_time, means_of_transport, places, edit_by, creat_by) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$departure, $destination, $departure_time, $weekdays,  $delete_time, $arrival_time, $means_of_transport, $places, 1, 1]);
       
        return redirect('/dashboard');        
    }
}
