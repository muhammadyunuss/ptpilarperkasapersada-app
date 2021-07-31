<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Session;

class ServiceController extends Controller
{
    public function index(){

        Session::put('page','services');
        $projects = Project::get();
        // $projects = json_decode(json_encode($projects));
        // echo "<pre>"; print_r($projects); die;
        return view('service')->with(compact('projects'));
    }
}
