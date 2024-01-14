<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donation;

class PageController extends Controller
{
    public function errorpage()
    {
        return view('adminside.404');
    }
    public function blank()
    {
        return view('adminside.blank');
    }

    public function index()
    {
        $donations = Donation::all();
        $donationsCount = count($donations);

        $users = User::all();
        $usersCount = count($users);

        $donationsPending = Donation::where('status','=','Pending')->get();
        $donationsPendingCount = count($donationsPending);

        $donationsApproved = Donation::where('status','=','Approved')->get();
        $donationsApprovedCount = count($donationsApproved);
        return view('adminside.index',compact('donationsCount','usersCount','donationsPendingCount','donationsApprovedCount'));
    }
    public function signin()
    {
        return view('adminside.signin');
    }

    // public function login()
    // {
    //     return view('admniside.login');
    // }
    
    // Custom Pages
    public function profile()
    {
        return view('adminside.profile');
    }

    public function users()
    {
        $users=User::all();
        return view('adminside.users',compact('users'));
    }

    public function donations()
    {
        $donations = Donation::all();
        return view('adminside.donations',compact('donations'));
    }

    public function updateuser()
    {
        return view('adminside.updateuser');
    }

    public function updatedonation()
    {
        return view('adminside.updatedonation');
    }

    public function demodashboard()
    {
        return view('adminside.demodashboard');
    }
}
