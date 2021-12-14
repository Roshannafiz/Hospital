<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    //_______ Frontend View...
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }
    }

    //__________ About page view...
    public function about()
    {
        return view('user.about');
    }

    //__________ Doctor page view...
    public function doctors()
    {
        return view('user.doctors');
    }

    //__________ News /Blog page view...
    public function blog()
    {
        return view('user.blog');
    }

    //__________ News /Blog page view...
    public function contact()
    {
        return view('user.contact');
    }

    public function appointment(Request $request)
    {
        $data = new Appointment();

        $data->name = $request->name;
        $data->email = $request->email;

        $data->date = $request->date;
        $data->phone = $request->number;

        $data->message = $request->message;
        $data->doctor = $request->doctor;

        $data->status = 'In Progress';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', "Appointment Request Success We Contact With You Soon!");
    }

    public function myappointment()
    {
        if (Auth::id()) {

            if (Auth::user()->usertype == 0) {
                $userid = Auth::user()->id;
                $appoint = Appointment::where('user_id', $userid)->get();
                return view('user.my_appointment', compact('appoint'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
