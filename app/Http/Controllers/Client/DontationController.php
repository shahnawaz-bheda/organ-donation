<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DontationController extends Controller
{
    public function update(Request $request)
    {
        $id=Auth::guard('web')->user()->id;
        $user=User::find($id);
        $user->name=$request->input('name');
        $user->age=$request->input('age');
        $user->bloodgroup=$request->input('bloodgroup');
        $user->email=$request->input('email');
        $user->contact=$request->input('contact');
        $user->address=$request->input('address');
        if($request->input('password'))
        {
            $user->password=Hash::make($request->input('password'));

        }
        $user->update();
        return redirect('/profile');
    }

}
