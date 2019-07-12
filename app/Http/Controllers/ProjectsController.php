<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
      $projects = \App\projects::all();

      return $projects;

      return view('projects.index');
    }
}
