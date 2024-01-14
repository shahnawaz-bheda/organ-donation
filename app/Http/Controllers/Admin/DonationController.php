<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Support\Facades\File;

class DonationController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('adminside.adddonation',compact('users'));
    }

    public function store(Request $request)
    {
        $donation = new Donation;
        $donation->name = $request->input('name');
        $donation->donor_id = $request->input('donor_id');
        $donation->receiver_id = $request->input('receiver_id');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/donations/', $filename);
            $donation->image = $filename;
        }
        $donation->status = $request->input('status');
        $donation->save();
        return redirect('/admin/donations');
    }

    public function edit($id)
    {
        $donation = Donation::find($id);
        $users = User::all();
        return view('adminside.updatedonation',compact('donation','users'));
    }

    public function destroy($id)
    {
        $donation = Donation::find($id);
        $destination = 'uploads/donations/'.$donation->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $donation->delete();
        return redirect('/admin/donations');
    }

    public function update(Request $request, $id)
    {
        $donation = Donation::find($id);
        $donation->name = $request->input('name');
        $donation->donor_id = $request->input('donor_id');
        $donation->receiver_id = $request->input('receiver_id');
        $donation->status = $request->input('status');

        if($request->hasFile('image'))
        {
            $destination = 'uploads/donations/'.$donation->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/donations/', $filename);
            $donation->img = $filename;
        }
        $donation->update();
        return redirect('/admin/donations');
    }
}
