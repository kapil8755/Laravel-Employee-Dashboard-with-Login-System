<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Info;


use App\Models\User;

class InfoController extends Controller
{

    public function register(Request $req)
    {
        $cred = $req->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required"
        ]);

        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        if ($user->save()) {
            return redirect('logins');
        }
    }


    public function login(Request $req)
    {
        // Step 1: Validation
        $data = $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        // Step 2: Attempt login
        if (Auth::attempt($data)) {
            // Agar login successful hai, toh redirect karo dashboard par
            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'Email ya password galat hai');
    }



    // employee Crud Opertions
    public function viewData(Request $req)
    {
        $data = Info::all();
        return view('viewData', ['coll' => $data]);
    }

       //insert Data employee
    public function empregister(Request $req)
    {
        $cred = $req->validate([
            "name" => "required",
            "age" => "required",
            "salary" => "required",
            "image" => "required|image|mimes:jpg,jpeg,png,gif|max:2048"
        ]);


        if ($req->hasFile('image')) {

            $path = $req->file('image')->store('public');
            $imagepath = explode('/', $path);
            $result = $imagepath[1];
        } else {
            // handle error — file not uploaded
            return back()->with('error', 'कृपया एक इमेज अपलोड करें।');
        }

        $user = new Info();
        $user->name = $req->input('name');
        $user->age = $req->input('age');
        $user->salary = $req->input('salary');
        $user->image = $result;
        if ($user->save()) {
            return redirect('views');
        }
    }


    // show Data Update form

    public function show(Request $req)
    {
        $data = Info::find($req->id);
        return view('show', ['coll' => $data]);
    }


    //update data

    public function update(Request $req)
    {
        $cred = $req->validate([
            "name" => "required",
            "age" => "required",
            "salary" => "required",
            "image" => "required|image|mimes:jpg,jpeg,png,gif|max:2048"
        ]);
        $path = $req->file('image')->store('public');
        $imagepath = explode('/', $path);
        $result = $imagepath[1];
        $user = Info::find($req->id);
        $user->name = $req->input('name');
        $user->age = $req->input('age');
        $user->salary = $req->input('salary');
        $user->image = $result;
        if ($user->save()) {
            return redirect('views');
        }
    }


    //delete Data
    public function delete(Request $req)
    {
        $data = Info::find($req->id);
        if ($data->delete()) {
            return redirect('views');
        }
    }

    // Logout
    public function logout(Request $req)
    {
        Auth::logout(); // User ko logout karo
        return view('welcome');
    }
}
