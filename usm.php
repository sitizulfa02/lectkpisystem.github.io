<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Academic</title>

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">


        
        

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="assets/images/logo.png" alt="logo-img"></a>
                        <a href="index.html" class="logo-sm"><img src="assets/images/logo_sm.png" alt="logo-img"></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="mdi mdi-fullscreen"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle profile waves-effect waves-light notification-icon-box" data-toggle="dropdown"><i class="fa fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"> Profile</a></li>
                                        <li><a href="verify.php?action=logout"> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--<div class="user-details">-->
                        <!--<div class="pull-left">-->
                            <!--<img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">-->
                        <!--</div>-->
                        <!--<div class="user-info">-->
                            <!--<div class="dropdown">-->
                                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">David Cooper <span class="caret"></span></a>-->
                                <!--<ul class="dropdown-menu">-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>-->
                                    <!--<li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>-->
                                <!--</ul>-->
                            <!--</div>-->

                            <!--<p class="text-muted m-0">Admin</p>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--- Divider -->


                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Menu</li>
                            <!-- <li>
                                <a href="#" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard </span></a>
                            </li> -->

                            <!--date:03-01-2022: add menu admin-->
                            <!--
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> Admin </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="main.php?view=admin&action=student">Student</a></li>                                    
                                    <li><a href="main.php?view=admin&action=staf">Staf</a></li>                                    
                                </ul>
                            </li>
                            -->
                            <li>
                                <a href="main.php?view=course&action=timetable" class="waves-effect"><i class="mdi mdi-table"></i><span> Time Table </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i> <span> Lecturer </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="main.php?view=staf&action=list">Lecturer</a></li>
                                    <li><a href="main.php?view=staf&action=teachingLoad">Teaching Load</a></li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Form</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <!-- <li><a href="main.php?view=staf&action=add"><span>Add Staf</span></a></li> -->
                                            <li><a href="main.php?view=staf&action=add_teaching"><span>Add Teaching</span></a></li>
                                            <!--<li><a href="main.php?view=staf&action=add_supervise"><span>Add Supervisor</span></a></li>-->
                                        </ul>
                                    </li>
                                    <li><a href="main.php?view=staf&action=list_supervise">Supervisor</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-star"></i><span> Student </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="main.php?view=student&action=list">Student </a></li>
                                    <li><a href="main.php?view=student&action=list_graduation">Graduate </a></li>                                    
                                    <!--<li><a href="main.php?view=student&action=add">Form</a></li>-->
                                    <!--<li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-wysiwyg.html">WYSIWYG Editor</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>-->
                                </ul>
                            </li>

                            
                            <li>
                                <a href="main.php?view=programme&action=list" class="waves-effect"><i class="mdi mdi-google-wallet"></i><span> Programme </span></a>
                            </li>
                            

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Course </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul>
                                    <li>
                                        <a href="main.php?view=course&action=list"><span>Course List</span></a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Form</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="main.php?view=course&action=add"><span>Add Course</span></a></li>
                                            <!--<li><a href="javascript:void(0);"><span>xxx</span></a></li>-->
                                        </ul>
                                    </li>                                    
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> SuperAdmin </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="main.php?view=super&action=userlist">User</a></li>                                    
                                    <!-- <li><a href="main.php?view=admin&action=staf">Staf</a></li> -->
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Form</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="main.php?view=super&action=add_user"><span>Add User</span></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <!-- 
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-incognito"></i><span> SMU Data </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="main.php?view=smu&action=student">Student</a></li>                                    
                                    <li><a href="main.php?view=smu&action=staf">Staf</a></li>
                                </ul>
                            </li> -->

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-share-variant"></i><span>SMU Data </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Lecturer</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="main.php?view=smu&action=staf"><span>SMUS-Staf</span></a></li>
                                            <!-- <li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li> -->
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Student</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="main.php?view=smu&action=student"><span>SMUP-Student</span></a></li>
                                            <li><a href="main.php?view=smu&action=student_graduate"><span>Student-Graduate</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> 

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-image-filter"></i><span> Statistics </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="main.php?view=statistic&action=enrolment"><span>Enrollment</span></a>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Lecturer</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="main.php?view=statistic&action=lecturer_yr"><span>Statistic By Year</span></a></li>
                                            <li><a href="main.php?view=statistic&action=lecturer_gred"><span>Statistic By Grade</span></a></li>
                                            <li><a href="main.php?view=statistic&action=lecturer_status"><span>Statistic By Status</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Student</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="main.php?view=statistic&action=student_yr"><span>Statistic By Year</span></a></li>
                                            <li><a href="main.php?view=statistic&action=student_status"><span>Statistic By Status</span></a></li>
                                            <li><a href="main.php?view=statistic&action=student_course"><span>Statistic By Course</span></a></li>
                                        </ul>
                                    </li> 
                                    <!-- <li><a href="main.php?view=statistic&action=lecturer_yr">Lecturer</a></li>                                    
                                    <li><a href="#">Student</a></li> 
                                    <li><a href="main.php?view=statistic&action=programme">Programme</a></li>
                                    <li><a href="main.php?view=statistic&action=graduate">Graduate</a></li>-->
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Graduate</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul style="">
                                            <li><a href="main.php?view=statistic&action=graduate"><span>Graduate By Course</span></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>                           
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- 
	date: 22-09-2021 create connection
	date: 22-11-2021 edit connection
-->



<div class="content">
    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Staf Detail</h4>
        </div>
    </div>

    <div class="page-content-wrapper ">

        <div class="container">
        	<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <!--
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="page-header m-t-0">&nbsp;</h4>
                                </div>
                            </div>
                           	-->

                            <div class="col-lg-12">
                                <ul class="nav nav-tabs navtab-bg">
                                    <li class="active">
                                        <a href="#home" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                                            <span class="hidden-xs">Profile</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#supervise" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                                            <span class="hidden-xs">Supervise</span>
                                        </a>
                                    </li>
<!--                                     <li class="">
                                        <a href="#messages" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                            <span class="hidden-xs">Tesis/ Viva</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">Fees</span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <div class="row">
                                        	<div class="col-sm-3 col-xs-12">
                                        		<div class="m-t-20">
                                                    <form action="#">

                                                        <div class="form-group">
                                                            <label>&nbsp;</label>
                                                            <div>
                                                                <!-- <img src="../academic/img/user.png" alt="..." class="img-thumbnail"> -->
                                                                <img src="https://campusonline2.usm.my/photo/stafpic/890228075269.jpg" width="200" height="300" class="img-thumbnail">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        	</div>
                                        	<div class="col-sm-9 col-xs-12">
                                        		<form>
                                        			<div class="form-group">
	                                                    <label for="name">Staf Name</label>
	                                                    <input type="text" class="form-control" id="name" value="DR. AHMAD FAKRURROZI BIN MOHAMAD" readonly="readonly">
	                                                </div>
	                                                
<!--                                         			<div class="row">
	                                                	<div class="col-sm-6">
	                                                		<div class="form-group">
			                                                    <label for="status">Status</label>
			                                                    <input type="text" class="form-control" id="status" value="" readonly="readonly">
			                                                </div>	                                                
	                                                	</div>

	                                                	<div class="col-sm-6">
	                                                		<div class="form-group">
			                                                    <label for="nationality">Staff No</label>
			                                                    <input type="text" class="form-control" id="nationality" value="" readonly="readonly">
			                                                </div>	                                                
	                                                	</div>
	                                                </div> -->

	                                                <div class="row">
	                                                	<div class="col-sm-6">
	                                                		<div class="form-group">
			                                                    <label for="ic">IC No.</label>
			                                                    <input type="text" class="form-control" id="ic" value="890228075269" readonly="readonly">
			                                                </div>	                                                
	                                                	</div>

	                                                	<div class="col-sm-6">
	                                                		<div class="form-group">
			                                                    <label for="snr">Staff No.</label>
			                                                    <input type="text" class="form-control" id="snr" value="0043/16" readonly="readonly">
			                                                </div>
	                                                	</div>
	                                                </div>

	                                                <div class="row">
	                                                	<div class="col-sm-6">
	                                                		<div class="form-group">
			                                                    <label for="email">Email</label>
			                                                    <input type="text" class="form-control" id="email" value="fakrurrozi@usm.my" readonly="readonly">
			                                                </div>	                                                
	                                                	</div>

	                                                	<div class="col-sm-6">
	                                                		<div class="form-group">
			                                                    <label for="position">Position</label>
			                                                    <input type="text" class="form-control" id="position" value="PENSYARAH PERGIGIAN DUG51P" readonly="readonly">
			                                                </div>
	                                                	</div>
	                                                </div>

<!-- 	                                                <div class="row">
	                                                	<div class="col-sm-4">
	                                                		<div class="form-group">
			                                                    <label for="dt_register">Register Date</label>
			                                                    <input type="text" class="form-control" id="dt_register" value="" readonly="readonly">
			                                                </div>	                                                
	                                                	</div>

	                                                	<div class="col-sm-4">
	                                                		<div class="form-group">
			                                                    <label for="dt_min">Date Min</label>
			                                                    <input type="text" class="form-control" id="dt_min" value="" readonly="readonly">
			                                                </div>
	                                                	</div>

	                                                	<div class="col-sm-4">
	                                                		<div class="form-group">
			                                                    <label for="dt_max">Date Max</label>
			                                                    <input type="text" class="form-control" id="dt_max" value="" readonly="readonly">
			                                                </div>
	                                                	</div>
	                                                </div> -->

	                                            </form>
                                        	</div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="supervise">
                                    	<div class="row">
                                        	<div class="col-sm-3 col-xs-12">
                                        		<div class="m-t-20">
                                                    <form action="#">

                                                        <div class="form-group">
                                                            <label>&nbsp;</label>
                                                            <div>
                                                                <img src="https://campusonline2.usm.my/photo/stafpic/890228075269.jpg" width="200" height="300" class="img-thumbnail">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        	</div>
                                        														<div class="col-sm-9 col-xs-12">
		                                        		<!-- <form method="post" name="detail_akademik1" action="student/proces_student.php"> -->
		                                        			<div class="">
									                            <table id="datatable-buttons" class="table table-striped table-bordered">
									                            	<thead>
									                            		<tr>
									                            			<th>Status</th>
										                                    <th>Student</th>                                    
										                                    <th>IC No.</th>
										                                    <th>Date</th>
										                                    <th>Status</th>
									                            		</tr>
									                            	</thead>
									                            	<tbody>
									                            											                            		<tr>
									                            			<td>BERSAMA</td>
										                                    <td>AL-WINDAWI HDDEL FIKRAT MAJEED                              </td>
										                                    <td>A10786738</td>
										                                    <td>12-08-2021  </td>
										                                    <td>ACTIVE                                            </td>
										                            	</tr>
									                            											                            		<tr>
									                            			<td>BERSAMA</td>
										                                    <td>JASIM GHAZWAN HASAN JASIM                                   </td>
										                                    <td>A14064405</td>
										                                    <td>13-04-2022  </td>
										                                    <td>ACTIVE                                            </td>
										                            	</tr>
									                            											                            	</tbody>
									                            </table>
		                                                    </div>
			                                            <!-- </form> -->
                                        			</div>

											                                        	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>                    

                </div> <!-- content -->

                <footer class="footer">
                     © 2021 Academic@IPPT - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-2.1.4.min.js"></script>   <!-- add date: 28-10-2021 -->
        <script src="assets/js/jquery-ui.min.js"></script>      <!-- add date: 28-10-2021 -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        
        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        
        <script src="assets/pages/datatables.init.js"></script>

                
        <script src="assets/pages/form-advanced.js"></script>
        <script src="assets/js/app.js"></script>  

        <script type="text/javascript">
            jQuery(function($) {

                //datepicker plugin
                //link
                $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                })
                
            });
        </script>

        <!--
	date: 25-10-2021 add/delete row
	date: 28-10-2021 dropdownlist course/topic
-->

<script type="text/javascript">
	
	//add new row
	$( document ).ready(function() 
		{
			$('#add_new_row').click(function(){

				var tr_id 	= $('#tbl-addTopic').find('tbody>tr').first().attr('id');   //dptkan tr id
				var tr_id 	= tr_id.split('-'); 
				var x 		= tr_id[1];
				var xx 		= parseInt(x)+1;

				
		 		//console.log(xx); 

		 		var new_tr = '<tr id=row-'+xx+'>'+ 
		 					 	'<td><button type="button" class="btn waves-effect btn-default" id="delRow-'+xx+'" name="delRow-'+xx+'" value="Delete Row" onClick="deleteFunction(this.id)"><i class="fa fa-times "></i></button></td>'+
		 					 	'<td><input class="form-control" type="text" id="topiccode-'+xx+'" name="course['+xx+'][topiccode]" required="" placeholder="TMR 501"></td>'+	
		 					 	'<td><input class="form-control" type="text" id="topic-'+xx+'" name="course['+xx+'][topic]" required=""></td>'+		 					 	
		 					 	'<td><input class="form-control" type="text" id="sem-'+xx+'" name="course['+xx+'][type]" required=""></td>'+		
		 					 	'<td><input class="form-control" type="text" id="hour-'+xx+'" name="course['+xx+'][hour]" required="" onChange="myFunction(this.id)"></td>'+			 					 	
		 					 '</tr>';

		 					 

		 		$("#tbl-addTopic tbody:last").prepend(new_tr);
			});
		}
	);


	function deleteFunction(delRowId) {

		id = delRowId.split('-'); 
		var i = id[1];	
		console.log('row-'+i);

		$('#row-'+i).remove(); 	


    }  

</script>



      

    </body>
</html>