<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Storage;

class ApplyController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'experience' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'startdate' => 'required|date',
            'resume' => 'required|file|mimes:pdf',
            'coverletter' => 'required|file|mimes:pdf',
        ]);
    
        $jobApplication = new JobApplication([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'experience' => $validatedData['experience'],
            'position' => $validatedData['position'],
            'salary' => $validatedData['salary'],
            'startdate' => $validatedData['startdate'],
        ]);
    
        $jobApplication->save();
    
        // Save the uploaded files
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('uploads');
            $jobApplication->resume_path = $resumePath;
        }
    
        if ($request->hasFile('coverletter')) {
            $coverLetterPath = $request->file('coverletter')->store('uploads');
            $jobApplication->coverletter_path = $coverLetterPath;
        }
    
        $jobApplication->save();
    
        return response()->json(['message' => 'Bruh']);
    }
        
}
