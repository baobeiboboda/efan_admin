<?php if (!defined('THINK_PATH')) exit();?><!-- 每一个新的页面从这里开始都是一样的 -->
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />	
	<title><?php echo ($TMPL_TITLE); ?></title>
	<link rel="stylesheet" href="/efan/Public/assets/font/font.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/efan/Public/assets/css/custom.css">
	<script src="/efan/Public/assets/js/jquery-1.11.1.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="page-body">	
	<div class="page-container">
		<div class="sidebar-menu toggle-others fixed">
			<div class="sidebar-menu-inner">
				<header class="logo-env">
					<!-- 这里是网站的logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="/efan/Public/assets/images/logo@2x.png" width="80" alt="" />
						</a>
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="/efan/Public/assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>	
				</header>
				<!-- 如果不要菜单 这里开始是左侧的菜单 -->				
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
				<!-- 左侧菜单部分这里结束 -->
			</div>
		</div>
		<div class="main-content">		
			<!-- 这里开始是右侧最上面的导航条的开始 -->
			<nav class="navbar user-info-navbar" role="navigation">
				<ul class="user-info-menu right-links list-inline list-unstyled">
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="/efan/Public/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php echo ($__INFO__["name"]); ?>
								<i class="fa-angle-down"></i>
							</span>
						</a>
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="">
									<i class="fa-edit"></i>
									修改密码
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa-info"></i>
									报告bug
								</a>
							</li>
							<li class="">
								<a href="">
									<i class="fa-lock"></i>
									退出登录
								</a>
							</li>
						</ul>
					</li>					
				</ul>	
			</nav>
			<!-- 这里是内容页顶部信息条结束 -->
			<!-- 在Home里面，只有两个地方不同 这里往下是第一处不同的-->
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
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">团队成员发送短信</h3>
							
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal">


								<div class="form-group">
									<label class="col-sm-2 control-label">选取成员</label>
									
									<div class="col-sm-10">
										<p>
											<label class="checkbox-inline">
												<input id="checkall" type="checkbox" >全选
											</label>
										<?php if(is_array($studentsNameList)): foreach($studentsNameList as $key=>$vo): ?><label class="checkbox-inline">
												<input class="ids" type="checkbox" name="id" value="<?php echo ($vo["id"]); ?>">
												<?php echo ($vo["name"]); ?>
											</label><?php endforeach; endif; ?>
										</p>
										
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group" id="dmessage">
									<label class="col-sm-2 control-label" for="message">短信内容</label>
									
									<div class="col-sm-10">
										<textarea class="form-control autogrow" cols="5" id="message" name="message" placeholder="短信内容"></textarea>
									</div>
								</div>

								<?php if(isset($actions['USERMESSAGESEND'])): ?><a class="btn btn-blue btn-single pull-right" id="btnSubmit" name="btnSubmit" _href="<?php $str = $Think.INDEX_PATH_NAME.$actions['USERMESSAGESEND']['url'];echo U($str,array('key'=>$actions['USERMESSAGESEND']['key']))?>">发送</a><?php endif; ?>
							</form>
							
						</div>
					</div>
				
				</div>
			</div>
			<!-- Home中第一处不同结束 -->
			<!-- 页面最下方从这里开始 -->
			<!-- footer从两种样式里面选择在common/config.php中修改-->
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
			<!-- 页面最下方从这里结束 -->
		</div>
	</div>

	<!-- 这以下模板中的JS/CSS/FONT/IMAGES 都直接引用PUBLIC_ 其他的ajax 之类的见开发说明 -->
	<!-- 这以下的是HOME中的第二个不同 详情看模板的最下方的引用 sublimetext中可以ctrl+D批量修改 -->
	<script type="text/javascript" src="/efan/Public/Home/js/User/Message/index.js"></script>
	<link rel="stylesheet" href="/efan/Public/assets/js/datatables/dataTables.bootstrap.css">
	<script src="/efan/Public/assets/js/bootstrap.min.js"></script>
	<script src="/efan/Public/assets/js/TweenMax.min.js"></script>
	<script src="/efan/Public/assets/js/resizeable.js"></script>
	<script src="/efan/Public/assets/js/joinable.js"></script>
	<script src="/efan/Public/assets/js/xenon-api.js"></script>
	<script src="/efan/Public/assets/js/xenon-toggles.js"></script>
	<script src="/efan/Public/assets/js/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/efan/Public/assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="/efan/Public/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="/efan/Public/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
	<script src="/efan/Public/assets/js/xenon-custom.js"></script>
</body>
</html>