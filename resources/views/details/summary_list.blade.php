@extends('layouts.app')

@section('head-content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
<style>
body
{
    width: 100%;
    background-color: #005ce6;

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
              -webkit-animation-delay: 0.4s;
              -moz-animation-delay: 0.4s;
              animation-delay: 0.4s;
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

              @keyframes pulse {
                0% {transform: scale(1);}
                50% {transform: scale(1.1);}
                100% {transform: scale(1);}
              }
              .pulse {
                animation-name: pulse;
                animation-duration: 1s;
              }

              td
              {
                color: black;
              }

              tbody tr td:hover
              {
                color: red;
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

</style>
@endsection

@section('content')
    @if(count($result)>0)
        
        <div class="wrapper fadeInDown">
            <div id="rapper" class="container-box fadeIn first">
                    <div>
                        <span>
                           
                           <div class="box">
                              <div class="text animated pulse"><center>COURSE DETAILS </center>
                                
                              </div>

                          </div>
                          <center><img src="{{ asset('form2.png') }}" id="icon" alt="document Icon" /> </center>
                        </span>
                   </div>
            </div>
        
            <br/>
            <br/>
            <br/>
        
            <div class="wrap-table100 fadeIn second" style="margin-top: 50px;">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1" style="width: 5%; text-align: center; font-size: 30px;">Sl.No</th>
                                <th class="column2" style="width: 15%;text-align: center;  font-size: 30px;">USN</th>
                                <th class="column3" style="width: 15%;text-align: center; font-size: 30px;">Name</th>
                                <th class="column4" style="width: 25%;text-align: center; font-size: 30px;">Course Name</th>
                                <th class="column5" style="width: 10%;text-align: center; font-size: 30px;">Status</th>
                                <th class="column6" style="width: 35%;text-align: center; font-size: 30px;">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1?>
                            @foreach($result as $key)
                                <tr>
                                    <td class="column1" style="text-align: center; font-size: 20px;">{{$i++}}</td>
                                    <td class="column2" style="text-align: center; font-size: 20px;"><a href="details/{{$key->USN}}/{{$key->CourseName}}" />{{$key->USN}}</td>
                                    <td class="column3" style="text-align: center; font-size: 20px;">{{strtoupper($key->StudentName)}}</td>
                                    <td class="column4" style="text-align: center; font-size: 20px;">{{$key->CourseName}}</td>
                                    <td class="column5" style="text-align: center; font-size: 20px;">{{$key->Status}}</td>
                                    <td class="column6" style="text-align: center; font-size: 20px;"><a href={{$key->CertificateLink}} target="_blank" />{{$key->CertificateLink}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                                
                </div>
                <br/>
            <br/>
            <br/>
            </div>
        </div>
    @else
        <p>There's nothing</p>
    @endif
@endsection
