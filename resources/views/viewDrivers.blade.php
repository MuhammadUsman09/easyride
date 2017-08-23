@extends('test')
@section('content')
 <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboad</a></li>
                <li>Maps</li>
                <li class="active">Google Maps</li>
            </ol>

            <h1>Google Maps</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-muted dropdown-toggle" data-toggle='dropdown'><i class="icon-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-muted"><i class="icon-cog"></i></a>
                </div>
            </div>
        </div>

<div class="container" id="displayDriver">

		     <div class="row" id="displayDriver">
		        <div class="col-xs-12">
		            <div class="panel">
		                <div class="panel-heading">
		                    <h4>Geolocation</h4>
		                </div>
		                <div class="panel-body">
		                    <div id="map" style="height: 500px"></div>
		                </div>
		            </div>
		        </div>
		    </div>   
		   
		</div> 


   </div>
 </div
    <!--wrap -->

 @endsection