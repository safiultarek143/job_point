<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplication;
use Auth;

class JobApplicationController extends Controller
{
    public function store(Request $requsest, $job_id, $company_id)
    {
                $job = new JobApplication();
                $job->applicant_id  = Auth::id();
                $job->job_id = $job_id;
                $job->company_id = $company_id;
                $job->save();

        Session::flash('success', 'You applied for this Job Successfully!!');
        return back();
    }
}
