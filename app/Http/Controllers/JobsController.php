<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function getAllJobs()
    {
        $Jobs = Jobs::all();
        return response()->json($Jobs);
    }
    public function threeJobs()
    {
        $Jobs = Jobs::take(3)->get();

        // Return the data as a JSON response
        return response()->json($Jobs);
    }
}
