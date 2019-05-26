<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use Jenkinsmgmt\Helpers\Helper;
use App\Http\Controllers\JenkinsController;
use Validator;
use App\Models\ClasseViews;

class ClasseViewsController extends Controller {

    public function getAllClasses(Request $request) {
        $classes  = ClasseViews::all();
        if(!empty($classes)) {
           return response()->json($classes);
           
        }
     }
}