@extends('layouts.app')

@section('head-content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">

@endsection
    

@section('content')

        <div class="wrapper fadeInDown">
            <div id="rapper" class="container-box fadeIn first">
                <div class="inner left" style="width: 75%;">
                    <span>
                       
                       <div class="box">
                          <div class="text animated pulse"><center> Welcome to MOOC's Management System </center></div>
                      </div>
                    </span>
               </div>

               <div class="inner right" style="width: 25%; padding-top: 17px;">
                    <center><img src="{{ asset('handshake_icon1.png') }}" id="icon" class="shake" alt="down Icon" /> </center>
               </div>
            </div>
        
            <div class="container-box fadeIn second">
                        
                <h2>What is Mooc's and NPTEL Management System ? </h2>

                <p id="type">
                    Put all your contents here.Put all your contents here.Put all your contents here.
                    Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.Put all your contents here.
                </p>
                        
            </div>
            <br/><br/>
            
                <div id=rapper class="container-box fadeIn third">
                  <div class="inner left">
                      <h4>Sign In to your Account</h4>
                        <h4>and </h4>
                        <h4>finish up the job!</h4>
                        <center>
                            <img src="{{ asset('down-arrow.png') }}" id="icon" alt="down Icon" class="shake" />
                        </center>
                        <center>
                           <a href="{{ route('login') }}"> <button>
                               <i class="fa fa-spinner fa-spin"></i> LOG IN
                            </button></a>
                        </center>
                  </div>
                  <div class="inner right">
                        <h4>Don't have an account?</h4>
                        <h4>No worries! </h4>
                        <h4>Join others here</h4>
                        <center>
                            <img src="{{ asset('down-arrow.png') }}" id="icon" alt="down Icon" class="shake" />
                        </center>
                        <center>
                           <a href="{{ route('register') }}"> <button>
                               <i class="fa fa-spinner fa-spin"></i> REGISTER
                            </button></a>
                        </center>
                  </div>
                </div>

                
            
        </div>
@endsection
