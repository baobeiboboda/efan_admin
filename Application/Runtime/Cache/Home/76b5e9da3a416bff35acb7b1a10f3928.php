<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title><?php echo ($TMPL_TITLE); ?></title>

	<link rel="stylesheet" href="/Public/assets/font/font.css">
	<link rel="stylesheet" href="/Public/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/Public/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/Public/assets/css/custom.css">
	<script src="/Public/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		
		
	</div>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="/Public/assets/images/logo@2x.png" width="80" alt="" />
						</a>
						
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="/Public/assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
				</header>

				<ul id="main-menu" class="main-menu">
					<?php if(is_array($__MENU__)): foreach($__MENU__ as $key=>$vo): ?><li>
							<a href="<?php echo U(INDEX_PATH_NAME . $vo['url'] . '/key/' . $vo['key']); ?>">
								<i class="<?php echo ($vo["pic"]); ?>"></i>
								<span class="title"><?php echo ($vo["title"]); ?></span>
							</a>
							<?php if(!empty($vo["childs"])): ?><ul>
							<?php if(is_array($vo["childs"])): foreach($vo["childs"] as $key=>$vochild): ?><li>
								<a href="<?php echo U(INDEX_PATH_NAME . $vochild['url'] . '/key/' . $vochild['key']); ?>">
									<span class="title"><?php echo ($vochild["title"]); ?></span>
								</a>
							</li><?php endforeach; endif; ?>
							</ul><?php endif; ?>
						</li><?php endforeach; endif; ?>
				</ul>
						
			</div>
			
		</div>
		
		<div class="main-content">		
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				<ul class="user-info-menu right-links list-inline list-unstyled">
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="/Public/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php echo ($__INFO__["name"]); ?>
								<i class="fa-angle-down"></i>
							</span>
						</a>
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<?php if(is_array($__MENU__['INFORMATION']['childs'])): foreach($__MENU__['INFORMATION']['childs'] as $key=>$information): ?><li>
								<a href="<?php echo U(INDEX_PATH_NAME . $information['url'] . '/key/' . $information['key']); ?>">
									<i class="<?php echo ($information['pic']); ?>"></i>
									<?php echo ($information["title"]); ?>
								</a>
							</li><?php endforeach; endif; ?>
						</ul>
					</li>					
				</ul>	
			</nav>
			<div class="page-title">
				<div class="title-env">
					<h1 class="title">DataTable</h1>
					<p class="description">Dynamic table variants with pagination and other controls</p>
				</div>
					<div class="breadcrumb-env">
								<ol class="breadcrumb bc-1">
									<li>
							<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
						</li>
								<li>
						
										<a href="tables-basic.html">Tables</a>
								</li>
							<li class="active">
						
										<strong>Data Tables</strong>
								</li>
								</ol>
								
				</div>
					
			</div>
			
			
			
			
			
			
			
			<!-- Custom column filtering -->
			<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo ($title); ?></h3>
							
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal" id="editRecruitForm" name="addRecruitForm" method="post">
								<div class="form-group" id="did" hidden="hidden">
									<label class="col-sm-2 control-label" for="id">id</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="id" name="id" value="<?php echo ($info["id"]); ?>">
									</div>
								</div>

								<div class="form-group" id="dtoken" hidden="hidden">
									<label class="col-sm-2 control-label" for="token">token</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="token" name="token" value="<?php echo ($token); ?>">
									</div>
								</div>

								<div class="form-group" id="dwhen">
									<label class="col-sm-2 control-label" for="when" data-validate="when">报名批次</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="when" name="when" readonly="readonly" value="<?php echo ($info["time"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dstudent_ID">
									<label class="col-sm-2 control-label" for="student_ID">学号</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="student_ID" name="student_ID" placeholder="请输入学号" value="<?php echo ($info["studentid"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dname">
									<label class="col-sm-2 control-label" for="name">姓名</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" value="<?php echo ($info["name"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dphone">
									<label class="col-sm-2 control-label" for="phone">电话</label>
									
									<div class="col-sm-10">
										<div class="input-group">
											<input type="text" class="form-control" id="phone" name="phone" value="<?php echo ($info["phone"]); ?>">
										</div>
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dcollege">
									<label class="col-sm-2 control-label" for="college">学院</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="college" name="college" value="<?php echo ($info["college"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dmajor">
									<label class="col-sm-2 control-label" for="field-1">专业</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="major" name="major" value="<?php echo ($info["major"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dclass">
									<label class="col-sm-2 control-label" for="class">班级</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="class" name="class" value="<?php echo ($info["class"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dbirth">
									<label class="col-sm-2 control-label" for="birth">出生日期</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control datepicker" id="birth" name="birth" data-format="yyyy-MM-dd" value="<?php echo ($info["birthday"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dqq">
									<label class="col-sm-2 control-label" for="qq">QQ</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="qq" name="qq" value="<?php echo ($info["qq"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="demail">
									<label class="col-sm-2 control-label" for="email" data-validate="email">邮箱</label>
									
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" value="<?php echo ($info["email"]); ?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dintroduce">
									<label class="col-sm-2 control-label" for="introduce">自我介绍</label>
									
									<div class="col-sm-10">
										<textarea class="form-control autogrow" cols="5" id="introduce" name="introduce" readonly="readonly"><?php echo ($info["introduce"]); ?></textarea>
									</div>
								</div>
								
								<a type="button" id="btnsubmit" name="btnsubmit" class="btn btn-blue btn-single pull-right" _href="<?php $str = $Think.INDEX_PATH_NAME.'Recruit/Audition/edit';echo U($str,array('key'=>'AUDITIONEDIT'))?>">更新资料</a>
								
							</form>
							
						</div>
					</div>
			
			
			
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky <?php echo ($TMPL_FOOTER["FOOTER_STYLE"]); ?>">
				<div class="footer-inner">
					<div class="footer-text">
						&copy; <?php echo ($TMPL_FOOTER["YEAR"]); ?> 
						<strong><?php echo ($TMPL_FOOTER["GROUP_SHORT"]); ?></strong> 
						  <?php echo ($TMPL_FOOTER["COMPANY"]); ?> <a href="<?php echo ($TMPL_FOOTER["GROUP_LINK"]); ?>" title="<?php echo ($TMPL_FOOTER["GROUP_FULL"]); ?>" target="_blank"><?php echo ($TMPL_FOOTER["GROUP_FULL"]); ?></a>
					</div>
					<div class="go-up">
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
					</div>
				</div>
			</footer>
		</div>
		
			
		
		
		
	</div>
	
	
	



	<script type="text/javascript" src="/Public/Home/js/Recruit/edit.js"></script>
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="/Public/assets/js/datatables/dataTables.bootstrap.css">

	<!-- Bottom Scripts -->
	<script src="/Public/assets/js/bootstrap.min.js"></script>
	<script src="/Public/assets/js/TweenMax.min.js"></script>
	<script src="/Public/assets/js/resizeable.js"></script>
	<script src="/Public/assets/js/joinable.js"></script>
	<script src="/Public/assets/js/xenon-api.js"></script>
	<script src="/Public/assets/js/xenon-toggles.js"></script>
	<script src="/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="/Public/assets/js/xenon-custom.js"></script>

</body>
</html>