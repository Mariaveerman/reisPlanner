<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class editRiceController extends Controller
{
    public function edit() {
        $id = $_POST['id'];
        $departure = $_POST['departure'];
        $destination = $_POST['destination'];
        $departure_time = $_POST['departure_time'];
        $arrival_time = $_POST['arrival_time'];
        $weekdays = $_POST['weekdays'];
        $delete_time = $_POST['delete_time'];
        $means_of_transport = $_POST['means_of_transport'];
        $places = $_POST['places'];
      
    
        DB::table('rices')
    ->where('id', $id) 
    ->update([
        'departure' => $departure,
        'destination' => $destination,
        'departure_time' => $departure_time,
        'weekdays' => $weekdays,
        'delete_time' => $delete_time,
        'arrival_time' => $arrival_time,
        'means_of_transport' => $means_of_transport,
        'places' => $places,
    ]);
       
        return redirect('/dashboard');
    }
}
