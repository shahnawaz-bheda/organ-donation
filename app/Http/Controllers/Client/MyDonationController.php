<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;

class MyDonationController extends Controller
{
    public function store(Request $request)
    {
        $donation = new Donation;
        $donation->donor_id = Auth::guard('web')->user()->id;
        $donation->name = $request->input('name');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/donations/', $filename);
            $donation->image = $filename;
        }
        $donation->receiver_id=null;
        $donation->status = 'Pending';
        $donation->save();
        return redirect('/my-donations');
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
        return redirect('/my-donations');
    }

    public function request($id)
    {
        $donation = Donation::find($id);
        $donation->receiver_id = Auth::user()->id;
        $donation->update();
        return redirect('/my-requests');
    }
}
