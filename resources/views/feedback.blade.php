<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Survey</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<style>
		.index{
		width:10px;}
	</style>
		 <style>
        
        #confirm-modal {
            width: 310px;
   
    top: 30%;
    margin: auto;
        }
        
        .confirm-dialog {
            width: 300px;
        }
        
        .confirm-content {
            width: 300px;
        }
        </style>
</head>

<body>
     <div class="modal fade" tabindex="-1" role="dialog" id="confirm-modal">
  <div class="modal-dialog confirm-dialog" role="document">
    <div class="modal-content confirm-content">
   
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <input type="hidden" name="profile" id="profilevalue">
         <input type="hidden" name="uniqueid" id="uniqueid">
        <h4 class="modal-title" id="confirm-content">{{ Session::get('message') }} </h4>
      </div>
      
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="/home" class="simple-text">
					DASHBOARD
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="/home">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	         
	              
	    
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Welcome  {{ ucwords(Auth::user()->name) }}</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
							
									<p class="hidden-lg hidden-md">Profile</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
					
						</ul>

				
					</div>
				</div>
			</nav>

		<div class="content">
				<div class="container-fluid">
				@if($flag==0)
	<form enctype="multipart/form-data" method="POST" action="/feedbacksurvey">
            {!! csrf_field() !!}		
<table border="">

<tbody><tr align="CENTER">
	<td class="index"></td>
<td width="75">Questions</td>
<td width="75"><b>Poor</b></td>
<td width="75"><b>Fair</b></td>
<td width="75"><b>Good</b></td>
<td width="75"><b>Very Good</b></td>
<td width="75"><b>Excellent</b></td>
<td width="75">Remark</td>
</tr>

<tr align="CENTER">
	<td class="index">1.</td>
<td align="LEFT">
 TAT for releasing PO/Work Order</td>
<td><input type="RADIO" name="question1" value="1"></td>
<td><input type="RADIO" name="question1" value="2"></td>
<td><input type="RADIO" name="question1" value="3"></td>
<td><input type="RADIO" name="question1" value="4"></td>
<td><input type="RADIO" name="question1" value="5"></td>
<td><input type="text" name="remark1" placeholder="Enter Remark"></td>
</tr>

<tr align="CENTER">
	<td class="index">2.</td>
<td align="LEFT">
 Time & Convenience in signing Agreements </td>
<td><input type="RADIO" name="question2" value="1"></td>
<td><input type="RADIO" name="question2" value="2"></td>
<td><input type="RADIO" name="question2" value="3"></td>
<td><input type="RADIO" name="question2" value="4"></td>
<td><input type="RADIO" name="question2" value="5"></td>
<td><input type="text" name="remark2" placeholder="Enter Remark"></td>
</tr>

<tr align="CENTER">
	<td class="index">3.</td>
<td align="LEFT">
   TAT fore releasing payment </td>
<td><input type="RADIO" name="question3" value="1"></td>
<td><input type="RADIO" name="question3" value="2"></td>
<td><input type="RADIO" name="question3" value="3"></td>
<td><input type="RADIO" name="question3" value="4"></td>
<td><input type="RADIO" name="question3" value="5"></td>
<td><input type="text" name="remark3" placeholder="Enter Remark"></td>
</tr>

<tr align="CENTER">
	<td class="index"></td>
<td align="LEFT">
TAT for  releasing WCT/TDS Certificates</td>
<td><input type="RADIO" name="question4" value="1"></td>
<td><input type="RADIO" name="question4" value="2"></td>
<td><input type="RADIO" name="question4" value="3"></td>
<td><input type="RADIO" name="question4" value="4"></td>
<td><input type="RADIO" name="question4" value="5"></td>
<td><input type="text" name="remark4" placeholder="Enter Remark"></td>
</tr>
	<tr align="CENTER">
<td class="index"></td>
		<td align="LEFT">
Vendor compliance evaluation process</td>
<td><input type="RADIO" name="question5" value="1"></td>
<td><input type="RADIO" name="question5" value="2"></td>
<td><input type="RADIO" name="question5" value="3"></td>
<td><input type="RADIO" name="question5" value="4"></td>
<td><input type="RADIO" name="question5" value="5"></td>
<td><input type="text" name="remark5" placeholder="Enter Remark"></td>
</tr>
	<tr align="CENTER">
		<td class="index"></td>
<td align="LEFT">
Over All association with  TATA AIG </td>
<td><input type="RADIO" name="question6" value="1"></td>
<td><input type="RADIO" name="question6" value="2"></td>
<td><input type="RADIO" name="question6" value="3"></td>
<td><input type="RADIO" name="question6" value="4"></td>
<td><input type="RADIO" name="question6" value="5"></td>
<td><input type="text" name="remark6" placeholder="Enter Remark"></td>
</tr>



</tbody></table>
					
				
</tbody></table>
<br>
<table border="" style="    width: 100%;">

<tbody><tr align="CENTER">
	<td class="index"></td>
<tr align="CENTER">

<td align="LEFT">Suggestion 1</td>
<td><input type="text" name="suggestion1" placeholder="Suggestion" style="width: 90%;"></td>
</tr>
<tr align="CENTER">

<td align="LEFT">Suggestion 2</td>
<td><input type="text" name="suggestion2" placeholder="Suggestion" style="width: 90%;"></td>
</tr>
<tr align="CENTER">

<td align="LEFT">Suggestion 3</td>
<td><input type="text" name="suggestion3" placeholder="Suggestion" style="width: 90%;"></td>
</tr>
</tbody></table>
					<button class="btn btn-primary" type="submit">Submit</button>
					</form>
						@else
<h3>You have already completed this survey . Thanks for your time .</h3>
					@endif
				</div>
			</div>

	
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>



	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>
    @if(Session::has('message')) 
    <script>
 $(document).ready(function(){
        $('#confirm-modal').modal('show');

    });
    </script>
@endif
</html>
