<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Import the Project model
use App\Http\Requests\ProjectRequest;

use App\Services\ProjectServices;
use Inertia\Inertia;

class PortfolioController extends Controller
{

    protected $projectServices;

    public function __construct(ProjectServices $projectServices)
    {
        $this->projectServices = $projectServices;
    }


    public function addProject(ProjectRequest $request)
    {
        $validated = $request->validated();//bali an validation adto ha request  
        $this->projectServices->create($validated); //bali an code para han create aadto ha services
        $projName = $validated['name']; //para ini han pag display name ngadto han pop up msg pag nag insert
        return redirect()->back()->with('success', "Project '{$projName}' added successfully!");
    }


    public function displayProjects()
    {
        $projects = $this->projectServices->getAllProject();//bali an code para han pagkuha database adto projectservices
        return Inertia::render('AdminPages/Projects', [
            'projects' => $projects,
        ]);
    }



}
