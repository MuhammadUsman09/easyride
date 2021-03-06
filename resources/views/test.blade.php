<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Avant</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Avant" />
    <meta name="author" content="The Red Team" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="{{ asset('public/assets/css/styles.min.css') }}" rel="stylesheet" type='text/css' media="all" />
    <!-- <link href="public/assets/css/styles.min.css" rel="stylesheet" type='text/css' media="all" /> -->

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css' />

     
        <link href='public/assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher' /> 
    
            <link href='public/assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher' /> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="public/assets/plugins/charts-flot/excanvas.min.js"></script>
        <link rel="stylesheet" href="public/assets/css/ie8.css">
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->

<link rel='stylesheet' type='text/css' href='public/assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='public/assets/plugins/form-toggle/toggles.css' /> 

    <style>
            </style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="">

<script>
  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  // ga('create', 'UA-44426473-2', 'hmelius.com');
  // ga('send', 'pageview');
</script>

    <div id="headerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-brown">

                        <div class="tiles-body">
                            <div class="pull-left"><i class="icon-pencil"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Create Post
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-grape">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="icon-group"></i></div>
                            <div class="pull-right"><span class="badge">2</span></div>
                        </div>
                        <div class="tiles-footer">
                            Contacts
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-primary">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="icon-envelope-alt"></i></div>
                            <div class="pull-right"><span class="badge">10</span></div>
                        </div>
                        <div class="tiles-footer">
                            Messeges
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-inverse">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="icon-camera"></i></div>
                            <div class="pull-right"><span class="badge">3</span></div>
                        </div>
                        <div class="tiles-footer">
                            Gallery
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-green">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="icon-cog"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Settings
                        </div>
                    </a>
                </div>
                <!--div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-success">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="icon-cog"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Admin Settings
                        </div>
                    </a>
                </div-->
                            
            </div>
        </div>
    </div>

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="pull-left" data-toggle="tooltip" data-placement="bottom" title="Toggle Left Sidebar"></a>
        <a id="rightmenu-trigger" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Toggle Right Sidebar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.html">Avant</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">John McCartney <i class="icon-caret-down icon-scale"></i></span><img src="public/assets/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            <div class="pull-left"><img class="userimg" src="public/assets/demo/avatar/dangerfield.png" alt="Jeff Dangerfield" /></div>
                            <div class="pull-right"><h5>Howdy, John!</h5><small>Logged in as <span>john275</span></small></div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="#">Edit Profile <i class="pull-right icon-pencil"></i></a></li>
                            <li><a href="#">Account <i class="pull-right icon-cog"></i></a></li>
                            <li><a href="#">Help <i class="pull-right icon-question-sign"></i></a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="text-right">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="icon-envelope"></i><span class="badge">1</span></a>
                <ul class="dropdown-menu messeges arrow">
                    <li>
                        <span>You have 1 new message(s)</span>
                        <span><a href="#">Mark all Read</a></span>
                    </li>
                    <li><a href="#" class="active">
                        <span class="time">6 mins</span>
                        <!-- <img src="public/assets/demo/avatar/doyle.png" alt="avatar" /> -->
                        <img src="{{URL::asset('public/assets/demo/avatar/doyle.png')}}" alt="avatar" />
                        
                        <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                    </a></li>
                    <li><a href="#">
                        <span class="time">12 mins</span>
                        <img src="public/assets/demo/avatar/paton.png" alt="avatar" />
                        <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                    </a></li>
                    <li><a href="#">
                        <span class="time">9 hrs</span>
                        <img src="public/assets/demo/avatar/corbett.png" alt="avatar" />
                        <div><span class="name">Simon Corbett</span><span class="msg">I am signing off for today.</span></div>
                    </a></li>
                    <li><a href="#">
                        <span class="time">2 days</span>
                        <img src="public/assets/demo/avatar/tennant.png" alt="avatar" />
                        <div><span class="name">David Tennant</span><span class="msg">How are you doing?</span></div>
                    </a></li>
                    <li><a class="dd-viewall" href="#">View All Messages</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="icon-bell-alt"></i><span class="badge">3</span></a>
                <ul class="dropdown-menu notifications arrow">
                    <li>
                        <span>You have 3 new notification(s)</span>
                        <span><a href="#">Mark all Seen</a></span>
                    </li>
                    <li>
                        <a href="#" class="notification-user active">
                            <span class="time">4 mins</span>
                            <i class="icon-user"></i>
                            <span class="msg">New user Registered. </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-danger active">
                            <span class="time">20 mins</span>
                            <i class="icon-bolt"></i>
                            <span class="msg">CPU at 92% on server#3! </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-success active">
                            <span class="time">1 hr</span>
                            <i class="icon-ok-sign"></i> 
                            <span class="msg">Server#1 is live. </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-warning">
                            <span class="time">2 hrs</span>
                            <i class="icon-warning-sign"></i> 
                            <span class="msg">Database overloaded. </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-order">
                            <span class="time">10 hrs</span>
                            <i class="icon-shopping-cart"></i> 
                            <span class="msg">New order received. </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-failure">
                            <span class="time">12 hrs</span>
                            <i class="icon-remove-sign"></i>
                            <span class="msg">Application error!</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-user">
                            <span class="time">12 hrs</span>
                            <i class="icon-user"></i>
                            <span class="msg">New user Registered. </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-user">
                            <span class="time">18 hrs</span>
                            <i class="icon-user"></i>
                            <span class="msg">New user Registered. </span>
                        </a>
                    </li>
                    <li><a href="#" class="dd-viewall">View All Notifications</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="headerbardropdown"><span><i class="icon-level-down"></i></span></a>
            </li>
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>

                <ul class="dropdown-menu arrow dropdown-menu-form" id="demo-dropdown">
                    <li>
                        <label for="demo-header-variations" class="control-label">Header Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-header-variations">
                            <li><a class="color-black" href="javascript:;" data-headertheme="header-black.css"></a></li>
                            <li><a class="color-dark" href="javascript:;" data-headertheme="default.css"></a></li>
                            <li><a class="color-red" href="javascript:;" data-headertheme="header-red.css"></a></li>
                            <li><a class="color-blue" href="javascript:;" data-headertheme="header-blue.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="demo-color-variations" class="control-label">Sidebar Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-color-variations">
                            <li><a class="color-lite" href="javascript:;" data-theme="default.css"></a></li>
                            <li><a class="color-steel" href="javascript:;" data-theme="sidebar-steel.css"></a></li>
                            <li><a class="color-lavender" href="javascript:;" data-theme="sidebar-lavender.css"></a></li>
                            <li><a class="color-green" href="javascript:;" data-theme="sidebar-green.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="fixedheader">Fixed Header</label>
                        <div id="fixedheader" style="margin-top:5px;"></div> 
                    </li>
                </ul>
            </li>
        </ul>
    </header>

    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li id="search">
                    <a href="javascript:;"><i class="icon-search opacity-control"></i></a>
                     <form />
                        <input type="text" class="search-query" placeholder="Search..." />
                        <button type="submit"><i class="icon-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="index.html"><i class="icon-home"></i> <span>Dashboard</span></a></li>

                
                <li><a href="javascript:;"><i class="icon-list-ol"></i> <span>Driver</span> <span class="badge badge-indigo">4</span></a>
                    <ul class='acc-menu'>
                        <li><a href="ui-typography.html">Registration</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="tables-basic.html">Tables</a></li>
                        <li><a href="form-layout.html">Forms</a></li>
                        <li><a href="ui-panels.html">Panels</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="icon-tasks"></i> <span>UI Componenets</span> <span class="badge badge-info">12</span></a>
                    <ul class="acc-menu">
                        <li><a href="ui-tiles.html">Tiles</a></li>
                        <li><a href="ui-modals.html">Modal Boxes</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-paginations.html">Pagers &amp; Paginations</a></li>
                        <li><a href="ui-breadcrumbs.html">Breadcrumbs</a></li>
                        <li><a href="ui-labelsbadges.html">Labels &amp; Badges</a></li>
                        <li><a href="ui-alerts.html">Alerts &amp; Notificiations</a></li>
                        <li><a href="ui-sliders.html">Sliders &amp; Ranges</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-nestable.html">Nestable Lists</a></li>
                        <li><a href="ui-wells.html">Wells</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="icon-table"></i> <span>Advanced Tables</span></a>
                    <ul class="acc-menu">
                        <li><a href="tables-data.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Tables</a></li>
                        <li><a href="tables-editable.html">Editable Tables</a></li>
                        <!-- <li><a href="#">Samples</a></li> Coming soon -->
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="icon-pencil"></i> <span>Advanced Forms</span><span class="badge badge-primary">5</span></a>
                    <ul class="acc-menu">
                        <li><a href="form-components.html">Components</a></li>
                        <li><a href="form-wizard.html">Wizards</a></li>
                        <li><a href="form-validation.html">Validation</a></li>
                        <li><a href="form-masks.html">Masks</a></li>
                        <li><a href="form-fileupload.html">Multiple File Uploads</a></li>
                        <li><a href="form-dropzone.html">Dropzone File Uploads</a></li>
                        <!-- <li><a href="#">Samples</a></li> Coming soon -->
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="icon-map-marker"></i> <span>Maps</span></a>
                    <ul class="acc-menu">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="icon-bar-chart"></i> <span>Charts</span></a>
                    <ul class="acc-menu">
                        <li><a href="charts-svg.html">Interactive</a></li>
                        <li><a href="charts-canvas.html">Lightweight</a></li>
                        <li><a href="charts-inline.html">Inline</a></li>
                        <li><a href="charts-flot.html">Extensible</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><i class="icon-calendar"></i> <span>Calendar</span></a></li>
                <li><a href="gallery.html"><i class="icon-camera"></i> <span> Gallery</span> </a></li>
                <li><a href="javascript:;"><i class="icon-flag"></i> <span>Icons</span> <span class="badge badge-orange">2</span></a>
                    <ul class="acc-menu">
                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                        <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="javascript:;"><i class="icon-briefcase"></i> <span>Extras</span> <span class="badge badge-danger">1</span></a>
                    <ul class="acc-menu">
                        <li><a href="extras-404.html">404 Page</a></li>
                        <li><a href="extras-500.html">500 Page</a></li>
                        <li><a href="extras-login.html">Login 1</a></li>
                        <li><a href="extras-login2.html">Login 2</a></li>
                        <li><a href="extras-blank.html">Blank Page</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="icon-sitemap"></i> <span>Unlimited Level Menu</span></a>
                    <ul class="acc-menu">
                        <li><a href="javascript:;">Menu Item 1</a></li>
                        <li><a href="javascript:;">Menu Item 2</a>
                            <ul class="acc-menu">
                                <li><a href="javascript:;">Menu Item 2.1</a></li>
                                <li><a href="javascript:;">Menu Item 2.2</a>
                                    <ul class="acc-menu">
                                        <li><a href="javascript:;">Menu Item 2.2.1</a></li>
                                        <li><a href="javascript:;">Menu Item 2.2.2</a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">And deeper yet!</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </li></ul>
            <!-- END SIDEBAR MENU -->
        </nav>

        <!-- BEGIN RIGHTBAR -->
        <div id="page-rightbar">

            <div id="chatarea">
                <div class="chatuser">
                    <span class="pull-right">Jane Smith</span>
                    <a id="hidechatbtn" class="btn btn-default btn-sm"><i class="icon-arrow-left"></i> Back</a>
                </div>
                <div class="chathistory">
                    <div class="chatmsg">
                        <p>Hey! How's it going?</p>
                        <span class="timestamp">1:20:42 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Not bad... i guess. What about you? Haven't gotten any updates from you in a long time.</p>
                        <span class="timestamp">1:20:46 PM</span>
                    </div>
                    <div class="chatmsg">
                        <p>Yeah! I've been a bit busy lately. I'll get back to you soon enough.</p>
                        <span class="timestamp">1:20:54 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Alright, take care then.</p>
                        <span class="timestamp">1:21:01 PM</span>
                    </div>
                </div>
                <div class="chatinput">
                    <textarea name="" rows="2"></textarea>
                </div>
            </div>

            <div id="widgetarea">
                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#accsummary"><h4>Account Summary</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="accsummary">
                        <div class="widget-block" style="background: #7ccc2e;">
                            <div class="pull-left">
                                <small>Current Balance</small>
                                <h5>$71,182</h5>
                            </div>
                            <div class="pull-right"><div id="currentbalance"></div></div>
                        </div>
                        <div class="widget-block" style="background: #595f69;">
                            <div class="pull-left">
                                <small>Account Type</small>
                                <h5>Business Plan A</h5>
                            </div>
                            <div class="pull-right">
                                <small class="text-right">Monthly</small>
                                <h5>$19<small>.99</small></h5>
                            </div>
                        </div>
                        <span class="more"><a href="#">Upgrade Account</a></span>
                    </div>
                </div>


                <div id="chatbar" class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#chatbody"><h4>Online Contacts <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="chatbody">
                        <ul class="">
                            <li data-stats="online"><a href="javascript:;"><img src="public/assets/demo/avatar/potter.png" alt="" /><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="public/assets/demo/avatar/tennant.png" alt="" /><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="public/assets/demo/avatar/johansson.png" alt="" /><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="public/assets/demo/avatar/jackson.png" alt="" /><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="public/assets/demo/avatar/jobs.png" alt="" /><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="public/assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="public/assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="public/assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="public/assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
                        </ul>
                        <span class="more"><a href="#">See all</a></span>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#taskbody"><h4>Pending Tasks <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="taskbody">
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Backend Development</div>
                                <div class="progress-percentage">25%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Bug Fix</div>
                                <div class="progress-percentage">17%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" style="width: 17%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Javascript Code</div>
                                <div class="progress-percentage">70%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Preparing Documentation</div>
                                <div class="progress-percentage">6%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" style="width: 6%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">App Development</div>
                                <div class="progress-percentage">20%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-orange" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <span class="more"><a href="ui-progressbars.html">View all Pending</a></span>
                    </div>
                </div>

 

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="storagespace">
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">1.31 GB of 1.50 GB used</div>
                                <div class="progress-percentage">87.3%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                                <div class="progress-bar progress-bar-warning" style="width: 25%"></div>
                                <div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#serverstatus"><h4>Server Status</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="serverstatus">
                        <div class="clearfix" style="padding: 10px 24px;">
                            <div class="pull-left">
                                <div class="easypiechart" id="serverload" data-percent="67">
                                        <span class="percent"></span>
                                </div>
                                <label for="serverload">Load</label>
                            </div>
                            <div class="pull-right">
                                <div class="easypiechart" id="ramusage" data-percent="20.6">
                                    <span class="percent"></span>
                                </div>
                                <label for="ramusage">RAM: 422MB</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END RIGHTBAR -->
        
<div id="page-content">
    @yield('content')
    
</div>

    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline">
                <li>AVANT &copy; 2013</li>
                li class="pull-right"><a href="javascript:;" id="back-to-top">Top <i class="icon-arrow-up"></i></a></li
                <button class="pull-right btn btn-inverse btn-xs" id="back-to-top" style="margin-top: -1px; text-transform: uppercase;"><i class="icon-arrow-up"></i></button>
            </ul>
        </div>
    </footer>

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="public/assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="public/assets/js/jqueryui-1.10.3.min.js'))</script>
-->
 
</body>
 {!!Html::script('public/assets/js/jquery-1.10.2.min.js')!!}
<!-- <script type='text/javascript' src='public/assets/js/jquery-1.10.2.min.js'></script>  -->
<script type='text/javascript' src='public/assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='public/assets/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='public/assets/js/enquire.js'></script> 
<script type='text/javascript' src='public/assets/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='public/assets/js/jquery.touchSwipe.min.js'></script> 
<script type='text/javascript' src='public/assets/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='public/assets/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='public/assets/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='public/assets/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='public/assets/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='public/assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='public/assets/js/application.js'></script> 
<script type='text/javascript' src='public/assets/demo/demo.js'></script> 
 {!!Html::script('public/assets/js/driverSignUp.js')!!}
 <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBid3dm-ejLEOCwwJq38BhIlfg7Jj0IxDs&callback=initMap">
    </script>

</html>
