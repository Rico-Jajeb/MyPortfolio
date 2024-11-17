<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Import the Project model
use App\Http\Requests\ProjectRequest;

use App\Services\ProjectServices;

class PortfolioController extends Controller
{

    protected $projectServices;

    public function __construct(ProjectServices $projectServices)
    {
        $this->projectServices = $projectServices;
    }


    public function addProj(ProjectRequest $request)
    {
        $validated = $request->validated();

        $this->projectServices->create($validated);
        //bali an code para han create aadto ha services
        
        return back()->with('success', 'Project added successfully!');
    }


}
