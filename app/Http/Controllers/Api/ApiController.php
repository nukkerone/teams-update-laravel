<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ApiController extends Controller
{
    public function getProjects() {
        return Project::all();
    }

    public function createProject() {

    }
}
