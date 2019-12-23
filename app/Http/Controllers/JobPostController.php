<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\JobPost;
use Auth;


class JobPostController extends Controller
{

    public function create()
    {
        return view('company.CreateJob');
    }
    public function store(Request $request)
    {

        $request->validate([
            'job_title' => 'required',
            'company_Name'=>'required',
            'jOb_description' =>'required',
            'salary' =>'required',
            'location' =>'required',
            'country' =>'required',

        ]);


        $jobpost = new JobPost();
        $jobpost->Job_title = $request->job_title;
        $jobpost->Company_Name = $request->company_Name;
        $jobpost->company_id = Auth::id();
        $jobpost->jOb_description = $request->jOb_description;
        $jobpost->salary = $request->salary;
        $jobpost->location = $request->location;
        $jobpost->country = $request->country;
        $jobpost->save();

        return redirect()->back()->with('message','Successfully Added');
    }
    public function alljob()
    {
        $alljobs = JobPost::all();
        return view('alljob', compact('alljobs'));
    }
    public function viewjob($id)
    {
        $jobpost = JobPost::find($id);
        return view('view', compact('jobpost'));

    }
}
