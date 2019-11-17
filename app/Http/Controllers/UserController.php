<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertificationDetails;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usn = auth()->user()->usn;
        $data = CertificationDetails::where('USN',$usn)->get();
        //return $data[1];
        return view('User.dashboard_user',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
         return view('details.create',compact('usn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=> 'required',
        'USN'=> 'required',
        'cname'=>'required',
        'cpro'=>'required',
        'sem'=>'required',
        'desc'=>'required',
        'duration'=>'required',
        'status'=>'required',
        'sdate'=>'required',
        'stdate'=>'required',
        'clink'=>'required'
      ]);
      $pd = CertificationDetails::all();
      $c=CertificationDetails::where('USN',request('USN'))->where('CourseName',request('cname'));
        if($c->count()==1){
              echo "<script>alert('Course for this User already exists');</script>";
              $usn = auth()->user()->usn;
                $data = CertificationDetails::where('USN',$usn)->get();
                if(count($data)==0)
                {   
                    $sname = auth()->user()->name;
                    $mydata = ['name'=>$sname,'usn'=>$usn];

                }
                return view('User.dashboard_user',compact('data','mydata'));
          }
      $post=new CertificationDetails;
      $post->StudentName=request('name');
      $post->USN=request('USN');
      $post->CourseName=request('cname');   
      $post->CourseProvider=request('cpro');
      $post->Sem=request('sem');
      $post->Description=request('desc');
      $post->Duration=request('duration');
      $post->Status=request('status');
      $post->BeginDate=request('sdate');
      $post->EndDate=request('stdate');
      $post->CertificateLink=request('clink');
      $post->save();
      echo "<script>alert('Success');</script>";
        $usn = auth()->user()->usn;
        $data = CertificationDetails::where('USN',$usn)->get();
        return view('User.dashboard_user',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($usn,$cname)
    {
        $pd = CertificationDetails::
        where('USN',$usn)
        ->where('CourseName',$cname)
        ->first();
        //return $pd;
        return view('details.show',compact('pd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
