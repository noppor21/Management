<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title> ระบบจัดการโครงการแผนงบประมาณประจำปี</title>

		<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
        
        <title></title>
    </head>
    <body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							 ระบบจัดการโครงการแผนงบประมาณประจำปี
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar5.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Developer
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
			<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>

							<span class="menu-text">
								จัดการข้อมูล

							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="create_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									สร้างเอกสารโครงการ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									ค่าใช้จ่ายที่เกี่ยวข้องกับโครงการ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									เอกสารที่เกี่ยวข้อง
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									บันทึกข้อความอนุญาตจัดโครงการ
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									ใบขออนุญาตใช้ยานพาหนะ
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									เอกสารมี่ผ่านการอนุมัติ
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									ค่าใช้จ่ายจริง
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									การเข้าร่วมประชุม/อบรม/สัมมนา/ศึกษาดูงาน
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="active">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-print"></i>

							<span class="menu-text">
								พิมพ์รายงาน

							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									รายงานการดำเนินการโครงการ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									ใบเบิกค่าใช้จ่ายในการเดินทางในไปราชการ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									ตารางหลักฐานการจ่ายเงินค่าใช้จ่ายในการเดินทางไปราชการ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="main_head_of_project.html">
									<i class="menu-icon fa fa-caret-right"></i>
									ใบติดใบเสร็จ
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
						</ul>
					</li>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<h4 class="pink">
									<i class="ace-icon fa fa-hand-o-right green"></i>
									<a role="button" class="blue" data-toggle="modal"> สร้างเอกสารโครงการ</a>
								</h4>
							</li> 
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<!-- *****************************-->
                                                                <form class="form-horizontal" method="post" role="form" name="frm">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ชื่อโครงการ </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="Project_name" />
										</div>
									</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> หลักการและเหตุผล </label>

										<div class="col-sm-9">
                                                                                    <textarea class="form-control"  type ="text" id="form-field-5"name="Project_rationale"></textarea>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> วัตถุประสงค์ </label>

										<div class="col-sm-5">
                                                                                    <input type="text" id="form-field-1"  class="col-xs-5 col-sm-5" name="Project_objective"/>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> เป้าหมาย </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="Project_goal" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ขั้นตอนการทำงาน </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="Project_work_procedures"/>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> เวลา </label>

										<div class="col-sm-9">
                                                                                    <input type="datetime-local" id="form-field-1"  class="col-xs-10 col-sm-5" name="Project_time" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> สถานที่ </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="Project_place" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ผู้เข้าร่วมโครงการ </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1"  class="col-xs-10 col-sm-5" name="Project_attendees"/>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ผลที่คาดว่าจะได้รับ </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="Project_expected_result"/>
										</div>
									</div>

								  	<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> การประเมินผล </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="Project_evaluation"/>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> งบประมาณ </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="Project_budgets"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ผู้รับผิดชอบโครงการ </label>

										<div class="col-sm-9">
                                                                                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="Project_Responsible_for_project"/>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
                                                                                    <button class="btn btn-info" type="submit" name="save">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Save
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								</form>
								<!-- ********************************* -- >

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">@</span>
							Computer Science and Information Iechnology
						 	<span class="blue bolder">@</span>
						</span>

					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/jquery.jqGrid.min.js"></script>
		<script src="assets/js/grid.locale-en.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page -->
    </body>
    
    <?php
include('config.php');

//print_r($_POST);
if(isset($_POST['save']))
{
$Project_name = mysql_real_escape_string($_POST['Project_name']); // รับค่าคร้าฟฟ

$Project_rationale  =mysql_real_escape_string($_POST['Project_rationale']);

$Project_objective   =mysql_real_escape_string($_POST['Project_objective']);

$Project_goal    =mysql_real_escape_string($_POST['Project_goal']);

$Project_work_procedures  =mysql_real_escape_string($_POST['Project_work_procedures']);

$Project_time=mysql_real_escape_string($_POST['Project_time']);

$Project_place=mysql_real_escape_string($_POST['Project_place']);

$Project_attendees=mysql_real_escape_string($_POST['Project_attendees']);

$Project_expected_result=mysql_real_escape_string($_POST['Project_expected_result']);

$Project_evaluation=mysql_real_escape_string($_POST['Project_expected_result']);

$Project_budgets=mysql_real_escape_string($_POST['Project_budgets']);

$Project_Responsible_for_project=mysql_real_escape_string($_POST['Project_Responsible_for_project']);
//
//



$query1=mysql_query("insert into Project values('','$Project_name','$Project_rationale','$Project_objective', '$Project_goal', '$Project_work_procedures', '$Project_time', '$Project_place', '$Project_attendees','$Project_expected_result','$Project_evaluation', '$Project_budgets', '$Project_Responsible_for_project')");
//echo "insert into addd values('','$name','$age')";
if($query1)
{
//header("location:list.php");
           
}
}
?>




</html>
