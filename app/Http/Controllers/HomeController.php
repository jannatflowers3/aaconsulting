<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        $usertype = Auth::user()->usertype;
        if($usertype== '1'){
            return view('admin.home');

        }
        else{
            return view('dashboard');
        }

    }



    // public function create()
    // {
    //     return view('frontend.contact');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required',
            'subject' => 'string',
            'message' => 'required',
        ]);

        $contactus = new ContactUs;
        $contactus->name = $request->input('name');
        $contactus->email = $request->input('email');
        $contactus->number = $request->input('number');
        $contactus->subject = $request->input('subject');
        $contactus->message = $request->input('message');
        $contactus->save();
        // Alert::success('Attendance Submite Successfully');
    return redirect()->back();

        // return redirect()->back()->with([
        //     'message' => 'User added successfully!',
        //     'status' => 'success'
        // ]);
    }
}
