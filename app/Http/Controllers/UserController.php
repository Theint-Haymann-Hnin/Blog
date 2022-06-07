<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {   
        $users = User::all();
        return  view('admin.user.index', compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status
        ]);
        return redirect('admin/users')->with('successAlert','You have successfully updated');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users')->with('successAlert','You have successfully deleted');
    }
}
