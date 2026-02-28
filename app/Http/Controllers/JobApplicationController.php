<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'job_type' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Upload Resume
        $resumePath = $request->file('resume')->store('resumes', 'public');

        $application = JobApplication::create([
            'job_type' => $request->job_type,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'experience' => $request->experience ?? null,
            'degree' => $request->degree ?? null,
            'skills' => $request->skills ?? [],
            'cover_letter' => $request->cover ?? null,
            'resume' => $resumePath,
        ]);

        // Send Mail to Admin
        Mail::to('sales@zalgoinfotech.com')->send(new JobApplicationMail($application));

        // Send Confirmation Mail to Applicant
        Mail::to($application->email)->send(new JobApplicationMail($application));

        return back()->with('success', 'Application submitted successfully!');
    }
}