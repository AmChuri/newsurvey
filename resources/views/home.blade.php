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
                        <a href="dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
             
                    <li>
                        <a href="table.html">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
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
                        <a class="navbar-brand" href="#">Welcome {{ ucwords(Auth::user()->name) }}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                            
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-stats">
                                
                                <div class="card-content" style= "text-align:center;">
                                    <p class="category"></p><br>
                                    <h3 class="title"><a href="/infra">Infra Survey</a></h3>
                                </div>
                            
                            </div>
                        </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-stats">
                                
                                <div class="card-content" style= "text-align:center;">
                                    <p class="category"></p><br>
                                    <h3 class="title"><a href="/feedback">Vendor Reverse Feedback</a></h3>
                                </div>
                            
                            </div>
                        </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-stats">
                                
                                <div class="card-content" style= "text-align:center;">
                                    <p class="category"></p><br>
                                    <h3 class="title"><a href="/facility">Facility Survey</a></h3>
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
