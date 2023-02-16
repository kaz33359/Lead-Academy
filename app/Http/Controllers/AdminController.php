<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin/auth/login');
    }
    public function dashboard()
    {
        return view('admin/pages/index');
    }
    public function enquiry()
    {
        return view('admin/pages/enquiry');
    }
    public function view_blog()
    {
        return view('admin/pages/view_blog');
    }


    public function checkadmin(Request $request)
    {

        // //validate
        // $request->validate([

        //     'email' => 'required',
        //     'password' => 'required|max:12',
        // ]);
        //validate
        $result[] = DB::table('admins')
            ->where(['admin_email' => $request->email])
            ->first();
        $db_pw = $request->password;
        $d = $result[0]->admin_password;
        // $db_pw = Crypt::decrypt($db_pwd);
        $db_pwd = Crypt::decrypt($d);
        // $db_pwd = $d;

        // return dd($db_pw,$db_pwd);
        // return dd($result);
        if (isset($result[0]->admin_id)) {

            if ($db_pwd == $db_pw) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result[0]->admin_id);
                $request->session()->put('LoggedAdmin', $result[0]->admin_id);
                return redirect('admin/index');
            } else {
                return redirect()->back()->with('fail', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('fail', 'We do not recognise your email address');
        }
    }


    public function hashp()
    {
        $paw = Crypt::encrypt('123456');
        $pa = Crypt::decrypt($paw);
        DB::table('admins')
            ->where(['admin_email' => "leadsadmin@gmail.com"])
            ->update([
                'admin_password' => $paw
            ]);

        dd($paw, $pa);
    }

    public function logout()
    {
        if (session()->has('LoggedAdmin')) {
            session()->pull('LoggedAdmin');
            session()->pull('ADMIN_ID');
            session()->pull('ADMIN_LOGIN');
            return redirect('admin/login')->with('success', 'Logout successful');
        }
    }
}