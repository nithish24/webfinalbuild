@extends('layouts.app')

@section('head-content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle3.css') }}">

    <style>
           
    </style>

@endsection

@section('content')

    <div class="wrapper fadeInDown">
            <div id="rapper" class="container-box fadeIn first">
                 <div id="rapper" class="container-box fadeIn first">
                    <div>
                        <span>
                           
                           <div class="box">
                              <div class="text animated pulse"><center>{{$pd->StudentName}}</center>
                               <center>{{$pd->USN}}</center>
                              </div>

                          </div>
                          <center><img src="{{ asset('user icon u.png') }}" id="icon" alt="document Icon" /> </center>
                        </span>
                   </div>
                </div>

                <div id="rapper" class="container-box fadeIn first">
                    <div>
                        <span>
                           
                           <div class="box">
                              <center>Course Name:</center>
                               <div class="text animated pulse"><center>{{$pd->CourseName}}</center>
                              </div>

                          </div>
                          <center><img src="{{ asset('ct icon2.jpg') }}" id="icon" alt="document Icon" /> </center>
                        </span>
                        <h2>
                            Description: 
                            <br/><br/>
                            <span>
                                <p>{{$pd->Description}}</p>
                            </span>
                        </h2>
                   </div>
                </div>


                <div id="rapper" class="container-box fadeIn first">
                    <div>
                        <span>
                           
                           <div class="box">
                              <center>Duration:</center>
                              </div>

                          
                          <center><img src="{{ asset('duration icon.png') }}" id="icon" alt="document Icon" /> </center>

                        </span>
                        <div class="text animated pulse">
                        <center><h2>Start Date:<span>{{$pd->BeginDate}}<br/>
                            End Date:{{$pd->EndDate}} </span></h2></center>
                        </div>
                   </div>
                </div>
                
            </div>
        </div>

@endsection
