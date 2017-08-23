@extends('test')
@section('content')
 <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboad</a></li>
                <li>Data</li>
                <li class="active">Driver</li>
            </ol>

            <h1>Driver Registration</h1>
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

	 <div class="container">

		<div class="panel panel-midnightblue">
	    <div class="panel-heading">
	        <h4>Driver Registration</h4>
	        <div class="options">   
	            <a href="javascript:;"><i class="icon-cog"></i></a>
	            <a href="javascript:;"><i class="icon-wrench"></i></a>
	            <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
	        </div>
	    </div>
	    <div class="panel-body collapse in">
	        <form  class="form-horizontal row-border"  id="driverForm"/>
	        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="form-group">
	                <label class="col-sm-3 control-label">Username</label>
	                <div class="col-sm-6">
	                	
	                    <input type="text" id="username" class="form-control" data-rangelength="[5,50]" placeholder=" Name Between 5 and 50 characters" required="required" />
	                </div>
	                 <div class="col-md-3" >
	                 <h3 id="usernamefieldcheck" style="color:red;font-size:15px;display:none">Empty Text Field Please fill*</h3>
	                 <h3 id="usernamelengthcheck" style="color:red;font-size:15px;display:none">Name Between 5 and 50 characters*</h3>
	                 <h3 id="usernamespacharcheck" style="color:red;font-size:15px;display:none">Special Character Not Allowed*</h3>
	                 </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-3 control-label">Email </label>
	                <div class="col-sm-6">
	                    <input type="email" id="email" class="form-control" data-type="email" placeholder="Email address" required="required" />
	                </div>
	                 <div class="col-md-3" >
	                 <h3 id="emailfieldcheck" style="color:red;font-size:15px;display:none">Empty Text Field Please fill*</h3>
	                 <h3 id="emailclientsidecheck" style="color:red;font-size:15px;display:none">Email must be in the format 'xyz@abc.com'*</h3>
	            	  <h3 id="emailserversidecheck" style="color:red;font-size:15px;display:none">Special Character Not Allowed*</h3>
	                 </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-3 control-label">Password </label>
	                <div class="col-sm-6">
	                    <input type="password" id="password" placeholder="Password" class="form-control" id="ps1" required="required"/>
	                </div>
	                 <div class="col-md-3" >
	                 <h3 id="passwordfieldcheck" style="color:red;font-size:15px;display:none">Empty Text Field Please fill*</h3>
	                 <h3 id="passwordlengthcheck" style="color:red;font-size:15px;display:none">Password Must be Greater than 7 Characters*</h3>
	            	  <h3 id="passwordserversidecheck" style="color:red;font-size:15px;display:none">Special Character Not Allowed*</h3>
	                 </div>
	            </div>
	             <div class="form-group">
	                <label class="col-sm-3 control-label">Repeat Password </label>
	                <div class="col-sm-6">
	                    <input type="password" id="repeatpassword" placeholder="Repeat Password" class="form-control" data-equalto="#ps1" required="required" />
	                </div>
	                 <div class="col-md-3" >
	                  <h3 id="repeatpasswordfieldcheck" style="color:red;font-size:15px;display:none">Empty Text Field Please fill*</h3>
	                 <h3 id="repeatpasswordlengthcheck" style="color:red;font-size:15px;display:none">Password Must be Greater than 7 Characters*</h3>
	            	  <h3 id="passwordmatchcheck" style="color:red;font-size:15px;display:none">password do not match*</h3>
	                 </div>
	            </div>
	            <div class="form-group">

		            <label class="col-sm-3 control-label">Submit Here </label>
	                <div class="col-sm-3">
	                    <button class="btn-primary btn" type="submit" id ="driverSubmit">Submit</button>
	                </div>
		        </div>
		        {!!csrf_field()!!}
	        </form>
	       <!--  <div class="panel-footer">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3">
	                    <div class="btn-toolbar">
	                        <button class="btn-primary btn" type="button" id ="driverSubmit">Submit</button>
	                        <button class="btn-default btn">Cancel</button>
	                    </div>
	                </div>
	            </div>
	        </div> -->

	    </div>
	    
		</div>


	</div>
</div>


@endsection