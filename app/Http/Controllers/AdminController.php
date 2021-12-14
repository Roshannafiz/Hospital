<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Doctor;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addview()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.add_doctor');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function upload(Request $request)
    {
        $doctor = new Doctor();

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->number;

        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
        $doctor->save();
        return redirect()->back()->with('message', "Doctor Added Successfully!");
    }

    public function showappointment()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data = Appointment::all();
                return view('admin.showappointment', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function active($id)
    {
        $data = Blog::find($id);
        $data->status = 'Active';
        $data->save();
        return redirect()->back();
    }

    public function inactive($id)
    {
        $data = Blog::find($id);
        $data->status = 'InActive';
        $data->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = Doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = Doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;

        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $image = $request->file;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }
        $doctor->save();
        return redirect('showdoctor')->with('message', "Doctor Details Updated!");
    }

    public function emailview($id)
    {
        $data = Appointment::find($id);
        return view('admin.email_view', compact('data'));
    }

    /*
    public function sendemail(Request $request, $id)
    {
        $data = Appointment::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];
        Notification::send($data, new SendEmailNotification($details));
        return redirect()->back();

    }
    */

    public function addblog()
    {
        return view('admin.add_blog');
    }

    public function uploadblog(Request $request)
    {
        $blog = new Blog();

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('blogimage', $imagename);
        $blog->image = $imagename;

        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->authorname = $request->authorname;
        $blog->status = 'Active';
        $blog->save();
        return redirect()->back()->with('message', "Blog Added Successfully!");
    }

    public function showblog()
    {
        $blog_datas = Blog::all();
        return view('admin.show_blog', compact('blog_datas'));
    }

    public function deleteblog($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateblog($id)
    {
        $data = Blog::find($id);
        return view('admin.update_blog', compact('data'));
    }

    public function editblog(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->authorname = $request->authorname;

        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('blogimage', $imagename);
            $blog->image = $imagename;
        }
        $blog->save();
        return redirect('show_blog')->with('message', "Blog Updated Successfully!");
    }
}
