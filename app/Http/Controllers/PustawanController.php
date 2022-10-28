<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustawanController extends Controller
{
    function index() 
    {
        $data = [
            "name" => "Putra Prayoga",  
            "gender" => "L",    
            "shift" => "Pagi",    
        ];
        return response()->json($data);
    }
}
