@extends('layouts.app')

@section('js')
    <style>

    body{
        background-color: #ccff99;
    }
    button{
        font-size: 70px;
        padding: 70px;
        margin: 20px;
        text-align: center;
        background-color: #009933;
        text-shadow: 1px 1px black;
        background-image: linear-gradient(to right, #009900 , #1aff1a);
        color: #ccff99;
        width: 30%;
        height: 30%;
    }

    span{
        width:30%;
        height: 30%;
        font-size: 120px;
    }

    </style>
@endsection

@section('content')
    @if(count($data)>0)
    <h1><center>{{$data[0]->StudentName}}</center></h1>
    <h3><center>{{$data[0]->USN}}</center></h3>

    <br/><br/>
    <?php $i=0 ?>
    <center>@foreach($data as $key)
        <?php
        if($i===2)
        {
            echo("<br/>");
            $i=0;
        }?>
    <a href="{{$key->USN}}/{{$key->CourseName}}"><button>  {{$key->CourseName}}</button></a>
         <?php $i++ ?>
    @endforeach</center>
    <br/>
    <center><button><span>+</span></button></center>
    @else
    @endif

@endsection
