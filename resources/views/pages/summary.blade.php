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
                margin-top: 0px;
                padding-top: 0px;
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

<script type="text/javascript">
  
  var xport = {
  _fallbacktoCSV: true,  
  toXLS: function(tableId, filename) {   
    this._filename = (typeof filename == 'undefined') ? tableId : filename;
    
    //var ieVersion = this._getMsieVersion();
    //Fallback to CSV for IE & Edge
    if ((this._getMsieVersion() || this._isFirefox()) && this._fallbacktoCSV) {
      return this.toCSV(tableId);
    } else if (this._getMsieVersion() || this._isFirefox()) {
      alert("Not supported browser");
    }

    //Other Browser can download xls
    var htmltable = document.getElementById(tableId);
    var html = htmltable.outerHTML;

    this._downloadAnchor("data:application/vnd.ms-excel" + encodeURIComponent(html), 'xls'); 
  },
  toCSV: function(tableId, filename) {
    this._filename = (typeof filename === 'undefined') ? tableId : filename;
    // Generate our CSV string from out HTML Table
    var csv = this._tableToCSV(document.getElementById(tableId));
    // Create a CSV Blob
    var blob = new Blob([csv], { type: "text/csv" });

    // Determine which approach to take for the download
    if (navigator.msSaveOrOpenBlob) {
      // Works for Internet Explorer and Microsoft Edge
      navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
    } else {      
      this._downloadAnchor(URL.createObjectURL(blob), 'csv');      
    }
  },
  _getMsieVersion: function() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf("MSIE ");
    if (msie > 0) {
      // IE 10 or older => return version number
      return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
    }

    var trident = ua.indexOf("Trident/");
    if (trident > 0) {
      // IE 11 => return version number
      var rv = ua.indexOf("rv:");
      return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
    }

    var edge = ua.indexOf("Edge/");
    if (edge > 0) {
      // Edge (IE 12+) => return version number
      return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
    }

    // other browser
    return false;
  },
  _isFirefox: function(){
    if (navigator.userAgent.indexOf("Firefox") > 0) {
      return 1;
    }
    
    return 0;
  },
  _downloadAnchor: function(content, ext) {
      var anchor = document.createElement("a");
      anchor.style = "display:none !important";
      anchor.id = "downloadanchor";
      document.body.appendChild(anchor);

      // If the [download] attribute is supported, try to use it
      
      if ("download" in anchor) {
        anchor.download = this._filename + "." + ext;
      }
      anchor.href = content;
      anchor.click();
      anchor.remove();
  },
  _tableToCSV: function(table) {
    // We'll be co-opting `slice` to create arrays
    var slice = Array.prototype.slice;

    return slice
      .call(table.rows)
      .map(function(row) {
        return slice
          .call(row.cells)
          .map(function(cell) {
            return '"t"'.replace("t", cell.textContent);
          })
          .join(",");
      })
      .join("\r\n");
  }
};


</script>
@endsection



@section('content')
    @if(count($pd)>0)
        <?php
        $m=[];
        foreach ($pd as $key )
        {
            $cnam = strtoupper($key->CourseName);
            $cname = trim($cnam);
            if(array_key_exists($cname,$m))
            {
                $m[$cname]+=1 ;
            }
            else
            {
                $m[$cname] = 1;
            }
        }

        ?>

        <div class="wrapper fadeInDown">
            <div id="rapper" class="container-box fadeIn first">
                    <div>
                        <span>
                           
                           <div class="box">
                              <div class="text animated pulse"><center>SUMMARY</center>
                                
                              </div>

                          </div>
                          
                        <center><img src="{{ asset('form1.png') }}" id="icon" alt="document Icon" /> </center>
                          
                          
                        </span>
                   </div>
            </div>
        
            <br/>
            <br/>
            <br/>
        
            <div class="wrap-table100 fadeIn first" style="margin-top: 50px;">
              <button id="btnExport" onclick="javascript:xport.toXLS('Summary');" style="float:right;" title="download ms-excel"> 
                  <center><img src="{{ asset('download.jpg') }}" id="icon1" alt="download Icon" /> </center>
                </button>
                <div class="table100">
                    <table id="Summary">
                        <thead>
                            <tr class="table100-head">
                                <th class="column1" style="width: 20%; text-align: center; font-size: 30px;">Sl.No</th>
                                <th class="column2" style="width: 60%;text-align: center;  font-size: 30px;">Course Name</th>
                                <th class="column3" style="width: 20%;text-align: center; font-size: 30px;">Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1?>
                            @foreach($m as $key=>$value)
                                <tr>
                                    <td class="column1" style="text-align: center; font-size: 20px;">{{$i++}}</td>
                                    <td class="column2" style="text-align: center; font-size: 20px;">{{$key}}</td>
                                    <td class="column3" style="text-align: center; font-size: 20px; color: red;"><strong>{{$value}}</strong></td>
                                    
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
