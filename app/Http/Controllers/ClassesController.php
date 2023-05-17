<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassesController extends Controller
{
    public function getAllClasses()
    {
        $Classes = Classes::all();
        return response()->json($Classes);
    }
}
