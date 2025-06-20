<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jobpost;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function create()
    {
        return view('admin.Pages.job.create');
    }
    public function store(Request $request)
{
    $job = new Jobpost();

    $job->title = $request->title;
     $job->description = $request->description;
    $job->location = $request->location;
    $job->compensation = $request->compensation;
    $job->role_overview = $request->role_overview;
    $job->responsibilities = json_encode($request->responsibilities);
    $job->requirements = json_encode($request->requirements);
    $job->target_services = json_encode($request->target_services);
    $job->industry = $request->industry;
    $job->position = $request->position;
    $job->experience = $request->experience;

    $job->save();

    return redirect()->back()->with('success', 'Job Posted Successfully!');
}
}
