<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>登录页面 - 统一开发平台 - UI库</title>
		<meta name="description" content="Restyling jQuery UI Widgets and Elements" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


		{{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
		{{--<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">--}}
		<link rel="stylesheet" href="{{ URL::asset('root/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('root/css/font-awesome.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('root/css/ace-fonts.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('root/css/ace.min.css')}}" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{ URL::asset('root/css/ace-part2.min.css')}}" />
		<![endif]-->
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{ URL::asset('root/css/ace-ie.min.css')}}" />
		<![endif]-->
		<script src="{{ URL::asset('root/js/ace-extra.min.js')}}"></script>
		<!--[if lte IE 8]>
		<script src="{{ URL::asset('root/js/html5shiv.min.js')}}"></script>
		<script src="{{ URL::asset('root/js/respond.min.js')}}"></script>


		<![endif]-->

		{{--<srcipt>--}}
			{{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content');--}}
		{{--</srcipt>--}}
		<srcipt src="{{URL::asset('root/js/jquery-1.9.1.min.js')}}}"></srcipt>

	</head>


	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="white">这里放后台登录名称</span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												输入登录信息
											</h4>

											<div class="space-6"></div>

											<form  id="form_login"   action="{{url('lege_admin/dologin')}}" method="post">
		               {{--{{ csrf_field() }}--}}
												{{--<input type="hidden" name="_token"  value="{{ csrf_field() }}">--}}
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="username" placeholder="用户名" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> 记住我</span>
														</label>

														<button type="button" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span id="logins" class="bigger-110">登录</span>
															{{--<input type="submit" value="登录">--}}
														</button>

													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													忘记密码
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													用户注册
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												重置密码
											</h4>

											<div class="space-6"></div>
											<p>
												输入您注册时候的email，用以接收密码重置信息
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">发送!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												返回登录
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												新用户注册
											</h4>

											<div class="space-6"></div>
											<p> 输入详细信息: </p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="确认密码" />
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															我接受
															<a href="#">用户协议</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">重置</span>
														</button>

														<button type="button" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">注册</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												返回登录
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{ URL::asset('root/js/jquery.min.js')}}'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='{{ URL::asset('root/js/jquery1x.min.js')}}'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ URL::asset('root/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			$("#logins").click(function(){

                {{--var data = new  FormData($("#form_login")[0]);--}}
	{{--console.log(data);--}}
                {{--$.post("{{url('lege_admin/dologin')}}",{'_token':'{{csrf_token()}}','data':data},function(msg){--}}
                    {{--console.log(msg);--}}
                {{--});--}}


           var data = new FormData($('#form_login')[0]);
        	var username = $("input[name='username']").val();
        	var password = $("input[name='password']").val();

            $.ajax({
                url: "{{url('lege_admin/dologin')}}",
                type: 'POST',
				data:data,
                {{--data: {--}}
                    {{--'username':username,--}}
					{{--'password':password,--}}
                    {{--'_token':'{{csrf_token()}}'--}}
                     {{--},--}}
                dataType: 'JSON',
                cache: false,
                processData: false,
                contentType: false,
                success:function(msg){
                    console.log(msg);
                },
                error:function(msg){
                    console.log(msg);
                }

            })
				// .done(function(msg){
            //
            //     console.log(msg);
            // });

            });
		</script>
	</body>
</html>
