<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;


class ContactController extends Controller
{
    public function enquiry(Request $request)
    {
        //validate
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'message' => 'required',

        ]);

        //input to database
        $enquiry = new contact();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $save_enq = $enquiry->save();
        if ($save_enq) {
            return redirect()->back()->with('success', 'Your response was submitted successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong...try again later');
        }
    }
    public function delete_enquiry(Request $request, $id)
    {
        $model = contact::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Enquiry deleted successfully');
    }
}