<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;
class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $id=Auth::guard('admin')->user()->id;
        $admin=Admin::find($id);
        $admin->email=$request->input('email');
        if($request->input('password'))
        {
            $admin->password=Hash::make($request->input('password'));

        }
        $admin->update();
        return redirect('/admin/profile');
    }
}
