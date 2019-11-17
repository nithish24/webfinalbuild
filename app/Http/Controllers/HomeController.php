<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertificationDetails;
use App\users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     '*
          '     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_admin == 1)
            return view('home');
        elseif(auth()->user()->is_admin == 0)
        {   
            $usn = auth()->user()->usn;
            $data = CertificationDetails::where('USN',$usn)->get();
            if(count($data)==0)
            {   
                $sname = auth()->user()->name;
                $mydata = ['name'=>$sname,'usn'=>$usn];

            }
            return view('User.dashboard_user',compact('data','mydata'));
        }
                
    }
}
