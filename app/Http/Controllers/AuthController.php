<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Models\User;
use App\Models\UserRole;

use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function Postlogin(Request $request){

        $username = $request->username;
        $password = $request->password;

        $this->validate($request,['username'=>'required','password'=>'required']);

        $admin = User::select()
            ->join('users_role','users_role.users_id','user.id') 
            ->orWhere('username','like',$username)
            ->where('password','=',$password)
            ->first();
        
        if ($admin == null) {
            return redirect()->to('/login')->withErrors(['msg' => 'incorrect username or password']);
        }

        auth()->login($admin);
        if(Auth::user()->Role[0]->role_id == 2){
            return redirect()->to('/_employee/home');
        }

        return redirect()->to('/_admin/home');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        return redirect('/login');
    }

}
