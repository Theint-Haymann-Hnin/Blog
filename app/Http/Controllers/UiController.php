<?php

namespace App\Http\Controllers;
use App\Models\Skill;

use Illuminate\Http\Request;

class UiController extends Controller
{
   public function index(){
       $skills = Skill::all();
       return view('ui.index', compact('skills'));
   }
}
