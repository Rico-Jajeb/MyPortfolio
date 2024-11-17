<?php

namespace App\Services;

use App\Models\Project;

class ProjectServices
{
 
    public function create(array $data)
    {
        return Project::create([
            'proj_name' => $data['name'],
            'proj_description' => $data['description'],
            'proj_img' => $data['img'],
            'proj_links' => $data['links'],
        ]);
        //Amo ini an code para han pag insert ngadto ha database table 'Project'
    }
}
