@extends('layouts.app')

@section('head-content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">

<style type="text/css">
   
a {
  color: #005ce6;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 25px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}

/* TABS */


.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}

/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
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


@endsection



@section('content')

<div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> ADD </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{ asset('ci.jpg') }}" id="icon" alt="User Icon" />
            </div>

            <div class="form-group row">
            	{!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}
			        <div class="form-group">
				        {{Form::text('name',auth()->user()->name, ['class'=> 'fadeIn', 'placeholder'=> 'Name'])}}
				    </div>
				    <div class="form-group">
				        {{Form::text('USN',auth()->user()->usn, ['class'=> 'fadeIn', 'placeholder'=> 'USN'])}}
				    </div>
				    <div class="form-group">				 
				        {{Form::text('cname','', ['class'=> 'fadeIn', 'placeholder'=> 'Course-Name','style="text-transform:uppercase"','required'])}}
				    </div>
				    <div class="form-group">
				        {{Form::text('cpro','', ['class'=> 'fadeIn', 'placeholder'=> 'Course provider','style="text-transform:uppercase"','required'])}}
				    </div>
				    <div class="form-group">
				        {{Form::number('sem','', ['class'=> 'fadeIn', 'placeholder'=> 'SEM','min'=>'1','max'=>'8','required'])}}
				    </div>
				    <div class="form-group">
				        {{Form::textarea('desc','', ['class'=> 'fadeIn', 'placeholder'=> 'Description','rows'=>'10','cols'=>'55','border'=>'none','required'])}}
				    </div>
				    <div class="form-group">
				        {{Form::number('duration','', ['class'=> 'fadeIn', 'placeholder'=> 'Duration(in weeks)','min'=>'1','max'=>'12','required'])}}
				    </div>
				    <div class="form-group">
				        {{Form::label('sdate','Start Date')}}
				        {{Form::date('sdate','', ['class'=> 'fadeIn','required'])}}
				    </div>
				    <div class="form-group">
				        {{Form::label('stdate','Stop Date')}}
				        {{Form::date('stdate','', ['class'=> 'fadeIn','required'])}}
				        
				    </div>
				    <div class="form-group">
				        {{Form::label('status','Status')}}
				        {{Form::select('status', ['Completed' => 'Completed', 'incomplete' => 'Incomplete'], 'C',['class'=> 'fadeIn','required'])}}
				    </div>
				    <div class="form-group">
				        
				        {{Form::url('clink','', ['class'=> 'fadeIn', 'placeholder'=> 'Certificate link','required'])}}
				    </div>
				    <div class="form-group">
				    	{{Form::submit('submit')}}
				    </div>
				    <div class="form-group">
				    	{{Form::reset('reset')}}
				    </div>
				{!! Form::close() !!}

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
</div>


@endsection
