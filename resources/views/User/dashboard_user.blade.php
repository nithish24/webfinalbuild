@extends('layouts.app')

@section('head-content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle2.css') }}">

    <style>
            .container-box.fadeIn.first
            {
                box-shadow: 0 30px 60px 0 rgba(0,0,0,0.8);
            }
            .text {
                text-align: center;
                font-size: 0.5em;
                font-family: sans-serif;
                text-transform: uppercase;
              }

              @keyframes pulse {
                0% {transform: scale(1);}
                50% {transform: scale(1.1);}
                100% {transform: scale(1);}
              }
              .pulse {
                animation-name: pulse;
                animation-duration: 1s;
              }
                
    </style>

@endsection

@section('content')
    @if(count($data)>0)
    <div class="wrapper fadeInDown">
            <div id="rapper" class="container-box fadeIn first">

                <div class="box">
                    <div class="text animated"><center style="font-size: 50px;">DASHBOARD</center>
                    </div>

                </div>
                
                 <div id="rapper" class="container-box fadeIn first">
                    <div>
                        <span>
                           
                           <div class="box">
                              <div class="text animated pulse"><center>{{$data[0]->StudentName}}</center>
                               <center>{{$data[0]->USN}}</center>
                              </div>

                          </div>
                          <center><img src="{{ asset('dashboard.png') }}" id="icon" alt="document Icon" /> </center>
                        </span>
                   </div>
                </div>
            </div>

            <div id="rapper" class="container-box fadeIn first">
                @foreach($data as $key)
                 <div id="rapper" class="container-box fadeIn first">
                    <a href="{{$key->USN}}/{{$key->CourseName}}">
                    <div>
                        <span>
                           
                           <div class="box">
                              <div class="text animated pulse"><center >{{$key->CourseName}}</center>
                              </div>

                          </div>
                          <center><img src="{{ asset('medal.jpg') }}" id="icon" alt="document Icon" /> </center>
                        </span>
                   </div>
                </a>
                </div>
                @endforeach
                <div id="rapper" class="container-box fadeIn first">
                    <a href="details/create">
                    <div>
                        <span>
                                     
                                     <div class="box">
                                        <div class="text animated pulse">
                                          <center>ADD COURSE</center>
                                         
                                        </div>

                                    </div>
                                    <center><img src="{{ asset('add icon.jpg') }}" id="icon" alt="document Icon" /> </center>
                                  </span>
                   </div>
                </a>
                </div>
            </div>
    </div>
    @else
    <div class="wrapper fadeInDown">
            <div id="rapper" class="container-box fadeIn first">

                <div class="box">
                    <div class="text animated swing"><center style="font-size: 50px;">DASHBOARD</center>
                    </div>

                </div>
                
                 <div id="rapper" class="container-box fadeIn first">
                    <div>
                        <span>
                           
                           <div class="box">
                              <div class="text animated pulse"><center>{{$mydata['name']}}</center>
                               <center>{{$mydata['usn']}}</center>
                              </div>

                          </div>
                          <center><img src="{{ asset('dashboard.png') }}" id="icon" alt="document Icon" /> </center>
                        </span>
                   </div>
                </div>
            </div>
              <div id="rapper" class="container-box fadeIn first">
                              <a href="details/create">
                              <div>
                                  <span>
                                     
                                     <div class="box">
                                        <div class="text animated pulse">
                                          <center>ADD COURSE</center>
                                         
                                        </div>

                                    </div>
                                    <center><img src="{{ asset('add icon.jpg') }}" id="icon" alt="document Icon" /> </center>
                                  </span>
                             </div>
                          </a>
              </div>
      </div>
    @endif

@endsection
