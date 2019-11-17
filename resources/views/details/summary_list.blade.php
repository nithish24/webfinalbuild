@extends('layouts.app')

@section('head-content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle2.css') }}">
<style>

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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('tblCustomers'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("CourseDetails.pdf");
                }
            });
        }
    </script>
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
              
              <button id="btnExport" onclick="Expot()" style="float:right;padding-left: 5px;" title="download ms-excel"> 
                  <center><img src="{{ asset('download.jpg') }}" id="icon1" alt="download Icon" /> </center>
                </button>
                <button id="btnExport" onclick="Export()" style="float:right;padding-left: 5px;" title="download pdf"> 
                  <center><img src="{{ asset('pdf icon.png') }}" id="icon1" alt="download Icon" /> </center>
                </button>
                <div class="table100">
                    <table id="tblCustomers">
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
