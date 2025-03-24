<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rice;

class deleteRiceController extends Controller
{
    public function test(Request $request) {
        $id = $request->input('id');
        $action = $request->input('action');

        if ($action == 'delete')
        {
            DB::delete('DELETE FROM rices WHERE id = ?', [$id]);
            return redirect('/dashboard');
        }
        else if ($action == 'edit')
        {
            $rices = DB::select('select * from rices where id = ?', [$id]);
            //$rice = Rice::find($id);
            // foreach ($rices as $rice) {

            //     echo $rice->id;
            
            // }
            return view('editRise', ['rices' => $rices]);
        }

        


    }
}
