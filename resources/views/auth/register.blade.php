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

.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* OTHERS */

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

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
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
            <h2 class="active"> Register </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{ asset('register.jpg') }}" id="icon" alt="User Icon" />
            </div>


            <form method="POST" action="{{ route('register') }}" id="register-form">
                @csrf
                    <div class="form-group row">
                        <input id="name" type="text" style="text-transform:uppercase" class="fadeIn second @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="What is your name?">
                          <br/>
                            @error('name')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
        
                

                    <div class="form-group row">
                        <input id="email" type="email" class="fadeIn third @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Mail Address?">
                                <br/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
        
                

                    <div class="form-group row">
                        <input id="usn" type="text" style="text-transform:uppercase" class="fadeIn fourth @error('usn') is-invalid @enderror" name="usn" value="{{ old('usn') }}" required autocomplete="usn" placeholder="Your USN?">
                                <br/>
                                @error('usn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
        
                    

                        <div class="form-group row">
                            <input id="password" type="password" class="fadeIn fifth @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                  <br/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        

                        <div class="form-group row">
                            <input id="password-confirm" type="password" class="fadeIn sixth" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
        
                        <div class="form-group row mb-0">
                            <!--<input type="submit" class="fadeIn seventh" value="Register">-->
                             <button type="submit" id="but" class="fadeIn seventh" value="Sign In" style="font-size: 15px;" onclick="changecon()" >REGISTER</button>
                        <button type="submit" id="but1" style="font-size: 15px;display:none;" ><i class="fa fa-spinner fa-spin" ></i>&nbsp REGISTERING YOU</button>
                        </div>
                       

                        <input type="reset" class="fadeIn eighth" value="Reset" id="reset">
            </form>
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
