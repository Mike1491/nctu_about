<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>交大人脈網</title>
        <meta name="description" content="交大人脈網" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- basic styles //-->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
        <!--[if IE 7]>
          <link rel="stylesheet" href="/styles/font-awesome-ie7.min.css" />
        <![endif]-->
        <!-- page specific plugin styles //-->
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="/styles/jquery.gritter.css" />
        <!-- fonts //-->
        <link rel="stylesheet" href="/styles/ace-fonts.css" />
        <!-- ace styles //-->
        <link rel="stylesheet" href="/styles/ace.min.css" />
        <link rel="stylesheet" href="/styles/ace-rtl.min.css" />
        <link rel="stylesheet" href="/styles/ace-skins.min.css" />
        <script src="/scripts/ace-extra.min.js"></script>
        @yield('external_style')
        <!--[if lte IE 8]>
          <link rel="stylesheet" href="/styles/ace-ie.min.css" />
        <![endif]-->
        <!-- inline styles related to this page //-->
        <style type="text/css">
        @yield('inline_style')
        </style>
        <!-- ace settings handler //-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries //-->
        <!--[if lt IE 9]>
        <script src="/scripts/html5shiv.js"></script>
        <script src="/scripts/respond.min.js"></script>
        <![endif]-->
    </head>
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="fa fa-users green"></i>
                                    <span class="blue">交大人脈網</span>
								</h1>
							</div>

							<div class="space-6"></div>
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
                                        @if (Session::has('errorLog'))
                                        <div class="row-fluid">
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                                <strong><i class="fa fa-times"></i>&nbsp;{{ Session::get('errorLog') }}</strong>
                                            </div>
                                        </div>
                                        @endif
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="fa fa-coffee green"></i>
                                                請輸入登入資訊
											</h4>
											<div class="space-6"></div>
                                            {{ Form::open(array('url' => '/login')) }}
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="帳號" name="username" />
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密碼" name="password" />
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="fa fa-key"></i>
                                                            登入
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											{{ Form::close() }}
										</div><!-- /widget-main -->
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
        <!-- scripts //-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <!-- ace scripts -->
        <script src="/scripts/ace-elements.min.js"></script>
        <script src="/scripts/ace.min.js"></script>
        <script src="/packages/bootbox/bootbox.js"></script>
        <script src="/packages/jQuery-Form-Validator/form-validator/jquery.form-validator.min.js"></script>
        @yield('external_js')
        <script>
        <!--
        @yield('inline_js')
        //-->
        </script>
    </body>
</html>
