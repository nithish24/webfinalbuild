@extends('layouts.app')

@section('head-content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
<style type="text/css">
   
    h2 {
      text-align: center;
      font-size: 25px;
      font-weight: 600;
      text-transform: uppercase;
      display:inline-block;
      margin: 40px 8px 10px 8px; 
      color: #cccccc;
    }

    h2.active {
      color: #0d0d0d;
      border-bottom: 2px solid #5fbae9;
    }


    *:focus {
        outline: none;
    } 

    * {
      box-sizing: border-box;
    }

    strong
    {
        font-size: 20px;
        color: red;
    }


</style>

<script type="text/javascript">
  function changecon()
  {
      document.getElementById('but').style.display="none";
      document.getElementById('but1').style.display="inline-block";
  }
</script>


@endsection


@section('content')

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{ asset('icon.png') }}" id="icon" alt="User Icon" />
            </div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    
                    <div class="form-group row">
                        <input type="email" id="email" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                        <br/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                        
                    
                
                    <div class="form-group row">
                        <input id="password" type="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        <br/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group row mb-0 ">
                        <button type="submit" id="but" class="fadeIn fourth" value="Sign In" style="font-size: 15px;" onclick="changecon()" >SIGN IN</button>
                        <button type="submit" id="but1"  value="Sign In" style="font-size: 15px;display: none;" ><i class="fa fa-spinner fa-spin" ></i>&nbsp SIGNING YOU IN</button>
                    </div>
            </form>

            <div id="formFooter">
                 
                    <a class="underlineHover" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                
            </div>
             <section class="wrapper dark">
            <div class="spinner">
              <i></i>
              <i></i>
              <i></i>
              <i></i>
              <i></i>
              <i></i>
              <i></i>
            </div>
          </section>
        </div>
    </div>
@endsection
