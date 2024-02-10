<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{



    public function register(Request $r)
    {

        $this->validate($r, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|unique:users,email',
            'pw' => 'required|min:4',
            'con_pw' => 'required|same:pw',
            'user_id' => 'required|unique:users,user_id'
        ], [], [
            'pw' => 'password',
            'con_pw' => 'password confirmation',
            'user_id' => 'user ID'
        ]);

        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->role = $r->input('role');
        $user->user_id = $r->input('user_id');
        $user->save();

        return redirect("/register");
    }

    public function show_register()
    {
        return view("register");
    }

    public function logout()
    {
        if (Session::has("user_id")) {
            Session::flush();
        }

        return redirect("login");
    }

    public function login(Request $r)
    {
        $user = User::where("email", "=", $r->email)
            ->first();

        if ($user) {
            if (Hash::check($r->pw, $user->password)) {
                Session::put("user_id", $user->user_id);
                Session::put("first_name", $user->first_name);
                Session::put("last_name", $user->last_name);
                Session::put("email", $user->email);
                Session::put("mobile", $user->mobile_number);
                Session::put("role", $user->role);

                if (Session::get("role") == "admin") {
                    return redirect("/dashboard");
                } else if (Session::get("role") == "user") {
                    return redirect("/");
                } else if (Session::get("role") == "delivery") {
                    return redirect("/delivery/dashboard");
                }
            } else {
                return redirect("/login");
            }
        } else {
            return redirect("/login");
        }
    }

    public function show_login()
    {
        return view("login");
    }
}
