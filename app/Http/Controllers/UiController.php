<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use App\Models\Project;
use App\Models\StudentCount;

use Illuminate\Http\Request;

class UiController extends Controller
{
   public function index(){
       $skills = Skill::all();
       $projects =Project::all();
       $studentcounts = StudentCount::find(1);
       return view('ui.index', compact('skills','projects','studentcounts'));
   }
   public function postIndex()
   {
    return view('ui.posts');
   }
}
