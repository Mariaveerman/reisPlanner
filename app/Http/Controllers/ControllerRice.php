<?php

namespace App\Http\Controllers;

use App\Models\Rice;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerRice extends Controller
{
    public function viewRice()
    {
      $rices = [];

      for ($i = 1; $i <= 10; $i++) { 
          $rice = Rice::find($i);
          if ($rice) { 
              $rices[] = $rice;
          }
      }
      $user = Auth::user() ?? (object) ['name' => 'Gast'];
      return view('rice', ['rices' => $rices], compact('user'));

      
    }
}
