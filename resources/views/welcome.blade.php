@extends('layouts.app')

@section('head-content')
        <!-- Styles -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
                
                 @import url('https://fonts.googleapis.com/css?family=Poppins');

            body
            {
                background-color: #005ce6;
                text-align: justify;
                text-justify: inter-word;
                font-family: "Poppins", sans-serif;
                height: 100vh;
            }

             .container-box
            {
                width: 80%;                
                background-color: #FFFAFA;
                margin: auto;
                padding: 40px;
                border-radius: 12px;
                margin-top: 50px;
                justify-content: center
                box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            }


            .container-box:hover
            {
                box-shadow: 0 30px 60px 0 rgba(0,0,0,1);
            }

            span
            {
                font-size: 50px;
                font-weight: 500; 
            }
            
            button
            {
                background-color: #005ce6;
                  border: none;
                  color: white;
                  padding: 15px 80px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  text-transform: uppercase;
                  font-size: 17px;
                  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
                  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
                  -webkit-border-radius: 5px 5px 5px 5px;
                  border-radius: 5px 5px 5px 5px;
                  margin: 5px 20px 40px 20px;
                  -webkit-transition: all 0.3s ease-in-out;
                  -moz-transition: all 0.3s ease-in-out;
                  -ms-transition: all 0.3s ease-in-out;
                  -o-transition: all 0.3s ease-in-out;
                  transition: all 0.3s ease-in-out;
            }

            button:hover
            {
                background-color:#39ace7; 
            }

            button:active
            {
                -moz-transform: scale(0.95);
                  -webkit-transform: scale(0.95);
                  -o-transform: scale(0.95);
                  -ms-transform: scale(0.95);
                  transform: scale(0.95);
            }

            .wrapper {
              display: flex;
              align-items: center;
              flex-direction: column; 
              justify-content: center;
              width: 100%;
              min-height: 100%;
              padding: 20px;
            }

            .fadeInDown {
              -webkit-animation-name: fadeInDown;
              animation-name: fadeInDown;
              -webkit-animation-duration: 1s;
              animation-duration: 1s;
              -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
            }

            @-webkit-keyframes fadeInDown {
                  0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -100%, 0);
                    transform: translate3d(0, -100%, 0);
                  }
                  100% {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none;
                  }
                }

                @keyframes fadeInDown {
                  0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -100%, 0);
                    transform: translate3d(0, -100%, 0);
                  }
                  100% {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none;
                  }
                }

                /* Simple CSS3 Fade-in Animation */
                @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
                @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
                @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }


            .fadeIn {
              opacity:0;
              -webkit-animation:fadeIn ease-in 1;
              -moz-animation:fadeIn ease-in 1;
              animation:fadeIn ease-in 1;

              -webkit-animation-fill-mode:forwards;
              -moz-animation-fill-mode:forwards;
              animation-fill-mode:forwards;

              -webkit-animation-duration:1s;
              -moz-animation-duration:1s;
              animation-duration:1s;
            }

            .fadeIn.first {
              -webkit-animation-delay: 0.4s;
              -moz-animation-delay: 0.4s;
              animation-delay: 0.4s;
            }

            .fadeIn.second {
              -webkit-animation-delay: 0.8s;
              -moz-animation-delay: 0.8s;
              animation-delay: 0.8s;
            }

            .fadeIn.third {
              -webkit-animation-delay: 1.2s;
              -moz-animation-delay: 1.2s;
              animation-delay: 1.2s;
            }

            #rapper 
            {
                width: 80%;                
                background-color: #FFFAFA;
                padding: 40px;
                border-radius: 12px;
                margin-top: 50px;
                justify-content: center
                box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            }

            .inner {width: 50%;}
            .left {float: left;}
            .right {float: right;}

            h4
            {
                text-align:center;
            }

            #icon {
              width:60%;
            }

            * {
              box-sizing: border-box;
            }

           
            img:hover {
              /* Start the shake animation and make the animation last for 0.5 seconds */
              animation: shake 0.5s;

              /* When the animation is finished, start again */
              animation-iteration-count: 2;
            }

            @keyframes shake {
              0% { transform: translate(1px, 1px) rotate(0deg); }
              10% { transform: translate(-1px, -2px) rotate(-1deg); }
              20% { transform: translate(-3px, 0px) rotate(1deg); }
              30% { transform: translate(3px, 2px) rotate(0deg); }
              40% { transform: translate(1px, -1px) rotate(1deg); }
              50% { transform: translate(-1px, 2px) rotate(-1deg); }
              60% { transform: translate(-3px, 1px) rotate(0deg); }
              70% { transform: translate(3px, 1px) rotate(-1deg); }
              80% { transform: translate(-1px, -1px) rotate(1deg); }
              90% { transform: translate(1px, 2px) rotate(0deg); }
              100% { transform: translate(1px, -2px) rotate(-1deg); }
            }


            .box {
               
              }

              .text {
                text-align: center;
                font-size: 1.0em;
                font-family: sans-serif;
                text-transform: uppercase;
              }

              .animated {
                animation-duration: 2.5s;
                animation-fill-mode: both;
                animation-iteration-count: infinite;
              }

              @keyframes rubberBand {
                0% {transform: scale(1);}
                30% {transform: scaleX(1.25) scaleY(0.75);}
                40% {transform: scaleX(0.75) scaleY(1.25);}
                60% {transform: scaleX(1.15) scaleY(0.85);}
                100% {transform: scale(1);}
              }
              .rubberBand {
                animation-name: rubberBand;
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
                    <center><img src="{{ asset('handshake_icon1.png') }}" id="icon" alt="down Icon" /> </center>
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
                            <img src="{{ asset('down-arrow.png') }}" id="icon" alt="down Icon" />
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
                            <img src="{{ asset('down-arrow.png') }}" id="icon" alt="down Icon" />
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
