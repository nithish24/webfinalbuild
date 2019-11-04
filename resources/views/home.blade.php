@extends('layouts.app')
 
@section('head-content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>

    body {
      font-family: "Poppins", sans-serif;
      height: 100vh;
      background-color: #005ce6;
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

        #formContent {
          -webkit-border-radius: 10px 10px 10px 10px;
          border-radius: 10px 10px 10px 10px;
          background: #fff;
          padding: 30px;
          width: 90%;
          max-width: 450px;
          position: relative;
          padding: 0px;
          -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
          text-align: center;
        }

        #formContent:hover {
          
          box-shadow: 0 30px 60px 0 rgba(0,0,0,1);
          
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
                box-shadow: 0 30px 60px 0 rgba(0,0,0,0.5);
            }

            .container-box:hover
            {
                box-shadow: 0 30px 60px 0 rgba(0,0,0,1);
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
              -webkit-animation-delay: 0.6s;
              -moz-animation-delay: 0.6s;
              animation-delay: 0.6s;
            }

            .fadeIn.third {
              -webkit-animation-delay: 0.8s;
              -moz-animation-delay: 0.8s;
              animation-delay: 0.8s;
            }

            .fadeIn.fourth {
              -webkit-animation-delay: 1s;
              -moz-animation-delay: 1s;
              animation-delay: 1s;
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

            .inner { width:30%;margin: 0 auto;}
            .left {float: left;}
            .right {float: right;}

             span
            {   

                font-size: 50px;
                font-weight: 500; 
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


            input[type=button], input[type=submit], input[type=reset]  {
                  background-color: #005ce6;
                  border: none;
                  color: white;
                  padding: 15px 80px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  text-transform: uppercase;
                  font-size: 13px;
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

                input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
                  background-color: #39ace7;
                }

                input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
                  -moz-transform: scale(0.95);
                  -webkit-transform: scale(0.95);
                  -o-transform: scale(0.95);
                  -ms-transform: scale(0.95);
                  transform: scale(0.95);
                }

            h4
            {
                text-align:center;
                font-size: 35px;
            }

            label
            {
                color: #0066ff;
                font-size: 25px;
            }

            .select
            {
                font-size: 20px;
            }

            .box {
            }

            .text {
              text-align: center;
              margin-top: 20px;
              font-size: 1.0em;
              font-family: sans-serif;
              text-transform: uppercase;
            }

            .animated {
              animation-duration: 2.5s;
              animation-fill-mode: both;
              animation-iteration-count: infinite;
            }


            @keyframes swing {
              20% {transform: rotate(15deg);}
              40% {transform: rotate(-10deg);}
              60% {transform: rotate(5deg);}
              80% {transform: rotate(-5deg);}
              100% {transform: rotate(0deg);}
            }
            .swing {
              transform-origin: top center;
              animation-name: swing;
            }



</style>
@endsection

@section('content')
    <div class="wrapper fadeInDown">
        <div id="rapper" class="container-box fadeIn first">
                
                <div class="inner left fadeIn second">
                    <center><img src="{{ asset('dashboard2.png') }}" id="icon" alt="dashboard Icon" /> </center>
               </div>

                <div class="inner left fadeIn third" style="padding-top: 40px;">
                    <div class="box">
                        <div class="text animated swing"><span>DASHBOARD</span></div>
                    </div>
                    
                </div>

               <div class="inner right fadeIn fourth">
                    <center><img src="{{ asset('dashboard.png') }}" id="icon" alt="dashboard Icon" /> </center>
               </div>
        </div>

        <div id="rapper" class="container-box fadeIn second">
                
                <div class="inner left fadeIn second">
                    <h4>Summary</h4>
                    <center><img src="{{ asset('form1.png') }}" id="icon" alt="form Icon" /> </center>
                    <form action="/details/summary" method="get" >
                        <br/><br/><br/>
                        <center>
                            <label>Sem :</label>
                            <select class="select">
                                <option>1</option>
                                <option>3</option>
                                <option>5</option>
                                <option>7</option>
                            </select>
                        </center>
                        <br/>
                        <input type="submit" value="Proceed" >
                    </form>
               </div>

                

               <div class="inner right fadeIn fourth">
                    <h4>Course Details</h4>
                    <center><img src="{{ asset('form2.png') }}" id="icon" alt="form Icon" /> </center>
                    <form action="/details" method="get" >
                        <br/><br/><br/>
                        <center>
                            <label>Sem :</label>
                            <select class="select">
                                <option>1</option>
                                <option>3</option>
                                <option>5</option>
                                <option>7</option>
                            </select>
                        </center>
                        <br/>
                        <input type="submit" value="Proceed" >
                    </form>
               </div>
        </div>

    </div>
    
        
@endsection