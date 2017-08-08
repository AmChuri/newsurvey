<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="/assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        .index{
        width:10px;}
    </style>
</head>

<body>

    <div class="wrapper">

        <div class="sidebar" data-color="purple" data-image="/assets/img/sidebar-1.jpg">
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
                        <a href="/admin/home">
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
                        <a class="navbar-brand" href="#">Welcome {{ ucwords(Auth::guard('admin')->user()->name) }}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                            
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    
                                    <li> <a href="{{ url('/admin/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form></li>
                                </ul>
                            </li>
                    
                        </ul>

                
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
    <div class="row">
                      
            
                    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Infra Survey</h4>
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                             <th>Emp No.</th>
                                            <th>Name</th>
                                           
                                            <th>Location Name</th>
                                            <th>Department</th>
                                            <th>State</th>
                                            <th>Q1</th>
                                            <th>Remark</th>
                                            <th>Q2</th>
                                            <th>Remark</th>
                                            <th>Q3</th>
                                            <th>Remark</th>
                                            <th>Q4</th>
                                            <th>Remark</th>
                                            <th>Q5</th>
                                            <th>Remark</th>
                                            <th>Q6</th>
                                            <th>Remark</th>
                                            <th>Q7</th>
                                            <th>Remark</th>
                                            <th>Q8</th>
                                            <th>Remark</th>
                                            <th>Q9</th>
                                            <th>Remark</th>
                                            <th>Suggestion 1</th>
                                            <th>Suggestion 2</th>
                                            <th>Suggestion 3</th>
                                        </thead>
                                        <tbody>
                                        @foreach($infra as $row)
                                            <tr>
                                           
                                        <td>{{$row['empno']}}</td>
                                                <td>{{$row['name']}}</td>
                                                 <td>{{$row['location']}}</td>
                                                <td>{{$row['department']}}</td>
                                                <td>{{$row['state']}}</td>
                                                 <td>{{$row['question1']}}</td>
                                                <td>{{$row['remark1']}}</td>
                                                <td>{{$row['question2']}}</td>
                                                 <td>{{$row['remark2']}}</td>
                                                <td>{{$row['question3']}}</td>
                                                <td>{{$row['remark3']}}</td>
                                                 <td>{{$row['question4']}}</td>
                                                <td>{{$row['remark4']}}</td>
                                                <td>{{$row['question5']}}</td>
                                                 <td>{{$row['remark5']}}</td>
                                                <td>{{$row['question6']}}</td>
                                                <td>{{$row['remark6']}}</td>
                                                 <td>{{$row['question7']}}</td>
                                                <td>{{$row['remark7']}}</td>
                                                <td>{{$row['question8']}}</td>
                                                 <td>{{$row['remark8']}}</td>
                                                <td>{{$row['question9']}}</td>
                                                <td>{{$row['remark9']}}</td>
                                                 <td>{{$row['suggestion1']}}</td>
                                                <td>{{$row['suggestion2']}}</td>
                                                <td>{{$row['suggestion3']}}</td>
                                               
                                            </tr>
                                       @endforeach
                                          
                                       
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                                       <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Vendor Reverse Feedback</h4>
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                             <th>Emp No.</th>
                                            <th>Name</th>
                                           
                                            <th>Location Name</th>
                                            <th>Department</th>
                                            <th>State</th>
                                            <th>Q1</th>
                                            <th>Remark</th>
                                            <th>Q2</th>
                                            <th>Remark</th>
                                            <th>Q3</th>
                                            <th>Remark</th>
                                            <th>Q4</th>
                                            <th>Remark</th>
                                            <th>Q5</th>
                                            <th>Remark</th>
                                            <th>Q6</th>
                                            <th>Remark</th>
                                           
                                            <th>Suggestion 1</th>
                                            <th>Suggestion 2</th>
                                            <th>Suggestion 3</th>
                                        </thead>
                                        <tbody>
                                        @foreach($feedback as $row)
                                            <tr>
                                              <td>{{$row['empno']}}</td>
                                                <td>{{$row['name']}}</td>
                                                 <td>{{$row['location']}}</td>
                                                <td>{{$row['department']}}</td>
                                                <td>{{$row['state']}}</td>
                                                 <td>{{$row['question1']}}</td>
                                                <td>{{$row['remark1']}}</td>
                                                <td>{{$row['question2']}}</td>
                                                 <td>{{$row['remark2']}}</td>
                                                <td>{{$row['question3']}}</td>
                                                <td>{{$row['remark3']}}</td>
                                                 <td>{{$row['question4']}}</td>
                                                <td>{{$row['remark4']}}</td>
                                                <td>{{$row['question5']}}</td>
                                                 <td>{{$row['remark5']}}</td>
                                                <td>{{$row['question6']}}</td>
                                                <td>{{$row['remark6']}}</td>
                                               
                                                 <td>{{$row['suggestion1']}}</td>
                                                <td>{{$row['suggestion2']}}</td>
                                                <td>{{$row['suggestion3']}}</td>
                                            </tr>
                                       @endforeach
                                          
                                       
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                                       <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Facility Survey</h4>
                                 
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                             <th>Emp No.</th>
                                            <th>Name</th>
                                           
                                            <th>Location Name</th>
                                            <th>Department</th>
                                            <th>State</th>
                                            <th>Q1</th>
                                            <th>Remark</th>
                                            <th>Q2</th>
                                            <th>Remark</th>
                                            <th>Q3</th>
                                            <th>Remark</th>
                                            <th>Q4</th>
                                            <th>Remark</th>
                                            <th>Q5</th>
                                            <th>Remark</th>
                                            <th>Q6</th>
                                            <th>Remark</th>
                                            <th>Q7</th>
                                            <th>Remark</th>
                                            <th>Q8</th>
                                            <th>Remark</th>
                                            <th>Q9</th>
                                            <th>Remark</th>
                                               <th>Q10</th>
                                            <th>Remark</th>
                                            <th>Suggestion 1</th>
                                            <th>Suggestion 2</th>
                                            <th>Suggestion 3</th>
                                        </thead>
                                        <tbody>
                                        @foreach($facility as $row)
                                          <tr>
                                                 <td>{{$row['empno']}}</td>
                                                <td>{{$row['name']}}</td>
                                                 <td>{{$row['location']}}</td>
                                                <td>{{$row['department']}}</td>
                                                <td>{{$row['state']}}</td>
                                                 <td>{{$row['question1']}}</td>
                                                <td>{{$row['remark1']}}</td>
                                                <td>{{$row['question2']}}</td>
                                                 <td>{{$row['remark2']}}</td>
                                                <td>{{$row['question3']}}</td>
                                                <td>{{$row['remark3']}}</td>
                                                 <td>{{$row['question4']}}</td>
                                                <td>{{$row['remark4']}}</td>
                                                <td>{{$row['question5']}}</td>
                                                 <td>{{$row['remark5']}}</td>
                                                <td>{{$row['question6']}}</td>
                                                <td>{{$row['remark6']}}</td>
                                                 <td>{{$row['question7']}}</td>
                                                <td>{{$row['remark7']}}</td>
                                                <td>{{$row['question8']}}</td>
                                                 <td>{{$row['remark8']}}</td>
                                                <td>{{$row['question9']}}</td>
                                                <td>{{$row['remark9']}}</td>
                                                   <td>{{$row['question10']}}</td>
                                                <td>{{$row['remark10']}}</td>
                                                 <td>{{$row['suggestion1']}}</td>
                                                <td>{{$row['suggestion2']}}</td>
                                                <td>{{$row['suggestion3']}}</td>
                                            </tr>
                                       @endforeach
                                          
                                       
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
        </div>
    </div>

</body>

    <!--   Core JS Files   -->
    <script src="/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/material.min.js" type="text/javascript"></script>



    <!--  Notifications Plugin    -->
    <script src="/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="/assets/js/material-dashboard.js"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="/assets/js/demo.js"></script>

</html>
