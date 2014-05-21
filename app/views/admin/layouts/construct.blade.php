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
    <body>
        <div class="navbar navbar-default" id="navbar">
            <div class="navbar-container container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="fa fa-tachometer"></i>
                            交大人脈網
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->
                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="/images/user.png" alt="Far Tseng" />
                                <span class="user-info">
                                    <small>歡迎,</small>
                                    {{ Session::get('user.cname') }}
                                </span>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li> <a href="#"> <i class="fa fa-cog"></i> 個人設定 </a> </li>
                                <li> <a href="#"> <i class="fa fa-user"></i> 個人資料 </a> </li>
                                <li class="divider"></li>
                                <li> <a href="/logout"> <i class="fa fa-power-off"></i> 登出 </a> </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>
        <div class="main-container container" id="main-container">
            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>
                <!-- Sidebar //-->
                <div class="sidebar" id="sidebar">
                    <ul class="nav nav-list">
                        <li class="{{ ViewHelper::isUrlActive('admin/dashboard*') }}">
                            <a href="#" class="dropdown-toggle">
                                <i class="fa fa-user icon-user"></i>
                                <span class="menu-text"> 個人資料</span>
                                <b class="arrow fa fa-angle-down icon-angle-down"></b>
                            </a>
                            <ul class="submenu" style="display: block;">
                                <li class="{{ ViewHelper::isUrlActive('admin/dashboard/basic*') }}">
                                    <a href="/admin/dashboard/basic">
                                        <i class="fa fa-angle-double-right icon-double-angle-right"></i>
                                        基本資料
                                    </a>
                                </li>
                                <li class="{{ ViewHelper::isUrlActive('admin/dashboard/skill*') }}">
                                    <a href="/admin/dashboard/skill">
                                        <i class="fa fa-angle-double-right icon-double-angle-right"></i>
                                        專業技能
                                    </a>
                                </li>
                                <li  class="{{ ViewHelper::isUrlActive('admin/dashboard/experience*') }}">
                                    <a href="/admin/dashboard/experience">
                                        <i class="fa fa-angle-double-right icon-double-angle-right"></i>
                                        工作經歷
                                    </a>
                                </li>
                                <li  class="{{ ViewHelper::isUrlActive('admin/dashboard/education*') }}">
                                    <a href="/admin/dashboard/education">
                                        <i class="fa fa-angle-double-right icon-double-angle-right"></i>
                                        學歷
                                    </a>
                                </li>
                                <li  class="{{ ViewHelper::isUrlActive('admin/dashboard/contact*') }}">
                                    <a href="/admin/dashboard/contact">
                                        <i class="fa fa-angle-double-right icon-double-angle-right"></i>
                                        聯絡方式
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Main Content //-->
                <div class="main-content">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="#">管理後台</a>
                            </li>
                            @yield('breadcrumb')
                        </ul><!-- .breadcrumb -->
                    </div>
                    <div class="page-content">
                        <div class="page-header">
                            <h1>@yield('page-header')</h1>
                        </div><!-- /.page-header -->
                        <div class="row">
                            @yield('page-content')
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
