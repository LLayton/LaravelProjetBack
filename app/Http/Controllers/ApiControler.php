<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisation;
class ApiControler extends Controller
{
    public function createApi(Request $request){
        $item = Organisation::create($request->all());
        return response()->json($item);
    }
}
