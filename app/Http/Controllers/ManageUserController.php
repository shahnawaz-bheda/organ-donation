<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageUserController extends Controller
{
    public function edit($id)
    {
        $user=User::find($id);
        return view('adminside.updateuser',compact('user'));
    }

    public function update(Request $request,$id)
    {
        
        $user=User::find($id);
        $user->name=$request->input('name');
        $user->age=$request->input('age');
        $user->bloodgroup=$request->input('bloodgroup');
        $user->email=$request->input('email');
        $user->contact=$request->input('contact');
        $user->address=$request->input('address');

        $user->update();
        return redirect('/admin/users');
    }

    public function distroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/admin/users');
    }
}
