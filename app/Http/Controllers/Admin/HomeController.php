<?php

namespace App\Http\Controllers\Admin; 
use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->title = 'Student Profile';
    //     $this->path = 'applicationform';
    //     $this->route_name = "applicationform";
    //     $this->model = new Users;
    // }

    public function index(Request $request)
    { 
         
        $data= Profile::get();
        return view('home.index',compact('data'));
    }

    public function store(Request $request)
   {

   }
}
