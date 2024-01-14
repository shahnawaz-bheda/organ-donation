<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function about()
    {
        return view('clientside.about');
    }
    public function contact()
    {
        return view('clientside.contact');
    }
    public function index()
    {
        return view('clientside.index');
    }
    public function blank()
    {
        return view('clientside.blank');
    }
    public function login()
    {
        return view('clientside.login');
    }
    public function register()
    {
        return view('clientside.register');
    }
    public function profile()
    {
        return view('clientside.profile');
    }
    public function donate()
    {
        return view('clientside.donate');
    }
    public function donations()
    {
        
        $donations = Donation::all();
        return view('clientside.donations',compact('donations'));
    }
    public function mydonations()
    {
        $donations = Donation::where('donor_id','=',Auth::user()->id)->with('receiver')->get();
        $key=0;
        return view('clientside.my-donations',compact('donations','key'));
    }

    public function myrequests()
    {
        $donations = Donation::where('receiver_id','=',Auth::user()->id)->get();
        $key=0;
        return view('clientside.my-requests',compact('donations','key'));
    }
}
