<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCount;

class StudentCountController extends Controller
{
   public function index()
   {
    $studentcounts = StudentCount::all();
    $student = StudentCount::find(1);
    return view('admin.studentcount.index', compact('studentcounts', 'student'));
   }
  
   public function store(Request $request)
   {
    $request->validate([
        'count'=>'required',
    ]);
    StudentCount::create([
        'count' =>$request->count
    ]);
    return back();
   }
   public function update(Request $request, $id)
   {
    $student = StudentCount::find($id);
    $request->validate([
        'count'=>'required',
    ]);
    $student->update([
        'count' => $student->count + $request->count,
    ]);
    return back();
   }
}
