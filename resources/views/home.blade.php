@extends('layouts.app')
 
@section('head-content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle2.css') }}">
<style type="text/css">
  .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
              position: fixed;
              left: 0px;
              top: 0px;
              width: 100%;
              height: 100%;
              z-index: 9999;
              background: url('loading.gif') center no-repeat #fff;
            }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

<script type="text/javascript">
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
@endsection

@section('content')
<div class="se-pre-con"></div>
    <div class="wrapper fadeInDown">
        <div id="rapper" class="container-box fadeIn first">
                
                <div class="inner left fadeIn second">
                    <center><img src="{{ asset('dashboard2.png') }}" id="icon" alt="dashboard Icon" /> </center>
               </div>

                <div class="inner left fadeIn third" style="padding-top: 40px;">
                    <div class="box">
                        <div class="text animated"><span>DASHBOARD</span></div>
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