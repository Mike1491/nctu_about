<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
        <meta name="description" content="Bootstrap One Page HTML5/CSS3 Parallax Resume Template" />
        <meta name="author" content="TheThemeLab">
        <title>{{ $user->ename }} - 交大人脈網 </title>
        <!-- Favicons -->
        <link rel="shortcut icon" href="/assets/img/ico-16.ico">
        <link rel="apple-touch-icon" href="/assets/img/ico-57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="/assets/img/ico-72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="/assets/img/ico-114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="/assets/img/ico-144.png" sizes="144x144">
        <!-- List of Stylesheet -->
        <link type='text/css' href="/assets/css/normalize.css" rel="stylesheet">
        <link type='text/css' href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link type='text/css' href="/assets/css/style.css" rel="stylesheet">
        <link type='text/css' href="/assets/css/style-responsive.css" rel="stylesheet">
        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Tangerine|Sintony:400,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="/assets/js/html5shiv.js"></script>
        <script src="/assets/js/respond.min.js"></script>
        <![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="75">
        <!-- Pre-loader -->
        <div class="mask">
            <div id="intro-loader">
            </div>
        </div>
        <!-- End Pre-loader -->

        <!-- Home Section -->
        <section id="home">
            <img id="cycle-loader" src="/assets/img/loader.gif" alt="loader" />
            <div id="fullscreen-slider">
                <!-- Slider item 1-->
                <div class="slider-item">
                    <img src="/assets/images/slide1.jpg" alt="">
                </div>
                <!-- End Slider item 1-->
                <!-- Slider item 2-->
                <div class="slider-item">
                    <img src="/assets/images/slide2.jpg" alt="">
                </div>
                <!-- End Slider item 2-->
            </div>
            <div class="slide-content">
                <div class="text-center">
                    <div class="header1">
                        <h1>Hello,</h1>
                        <p>{{ $user->welcome_text }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Section -->

        <!-- Navbar -->
        <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <div class="navbar-logo">{{ $user->ename }}</div> <!-- Logo or your name-->
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#home" class="collapse-menu">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="collapse-menu">關於</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="collapse-menu">作品集</a>
                        </li>
                        <li>
                            <a href="#skill" class="collapse-menu">技能</a>
                        </li>
                        <li>
                            <a href="#experience" class="collapse-menu">經驗</a>
                        </li>
                        <li>
                            <a href="#education" class="collapse-menu">教育</a>
                        </li>
                        <li>
                            <a href="#contact" class="collapse-menu">聯絡我</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- About Section -->
        <section id="about" class="section-content bg1">
            <div class="container">
                <!-- Section title -->
                <div class="section-title item_bottom text-center">
                    <h1>關於<i>我</i></h1>
                    <p class="tagline">Some information about myself.</p>
                    <div>
                        <span class="line-large"></span>
                    </div>
                </div>
                <!-- End Section title -->
                <div class="row">
                    <div class="col-md-4 item_top">
                        <div class="row">
                            <h3 class="tagline-lg">{{ $user->slogan }}</h3>
                            <div class="line-strong"></div>
                        </div>
                        <!-- SOCIAL LINKS -->
                        <div class="row social-link">
                            <a href="#"><i class="fa fa-facebook-square fa-3x"></i></a>
                            <a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square fa-3x"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square fa-3x"></i></a>
                            <a href="#"><i class="fa fa-vimeo-square fa-3x"></i></a>
                        </div>
                        <!-- END SOCIAL LINKS -->
                    </div>
                    <div class="col-md-4 text-center item_bottom">
                        <img src="http://placehold.it/300x374" class="img-center img-rounded img-responsive" alt="My photo" /> <!-- YOUR PHOTO -->
                    </div>
                    <div class="col-md-4 item_top">
                        <div class="name-title">
                            <h2>{{ $user->cname }}</h2> <!-- Your Name -->
                            <h5>{{ $user->position }} @ {{ $user->company }}</h5> <!-- Your Designation -->
                        </div>
                        <p>{{ nl2br($user->description) }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- StatBoard Container -->
        <div id="one-parallax" class="parallax" style="background-image: url('/assets/images/bg3.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="parallax-overlay">
                <div class="section-content">
                    <div class="container text-center">
                        <!-- Parallax content -->
                        <div class="parallax-content">
                            <div class="row text-center number-counters">
                                <div class="col-md-3 col-sm-6">
                                    <div class="counters-item new-line">
                                        <i class="fa fa-group fa-3x"></i>
                                        <strong data-to="{{ $user->customers }}">0</strong> <!-- Set Your Number here. i,e. data-to="56" -->
                                    </div>
                                    <p class="lead">Happy Customers</p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="counters-item new-line">
                                        <i class="fa fa-flag fa-3x"></i>
                                        <strong data-to="{{ $user->experience }}">0</strong>	<!-- Set Your Number here. i,e. data-to="56" -->
                                    </div>
                                    <p class="lead">Year Experience</p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="counters-item new-line">
                                        <i class="fa fa-trophy fa-3x"></i>
                                        <strong data-to="{{ $user->awards }}">0</strong>	<!-- Set Your Number here. i,e. data-to="56" -->
                                    </div>
                                    <p class="lead">Awards Won</p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="counters-item new-line">
                                        <i class="fa fa-css3 fa-3x"></i>
                                        <strong data-to="{{ $user->projects }}">0</strong><!-- Set Your Number here. i,e. data-to="56" -->
                                    </div>
                                    <p class="lead">Projects Done</p>
                                </div>
                            </div>
                        </div>
                        <!-- Parallax content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End StatBoard Container -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="section-content bg2">
            <div class="container">
                <!-- Section title -->
                <div class="section-title item_bottom text-center">
                    <h1>我的<i>作品集</i></h1>
                    <p class="tagline">Browse my most recent projects below.</p>
                    <div>
                        <span class="line-large"></span>
                    </div>
                </div>
                <!-- End Section title -->
            </div>
            <div class="portfolio-top">
            </div>
            <div id="portfolio-wrap">
                <div id="portfolio-page">
                    <div id="portfolio-content">
                        <div class="container">
                            <div id="protfolio-control">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <a href="#" id="prev-project" title="Previous Project"><i class="fa fa-arrow-left"></i></a>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                                        <a href="#" id="close-project" title="Close Project"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                                        <a href="#" id="next-project" title="Next Project"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End #protfolio-control -->
                            <!-- Ajax will load into here -->
                            <div id="portfolio-ajax">
                            </div>
                            <!-- End #portfolio-ajax -->
                            <!-- End Ajax -->
                        </div>
                        <!-- End .container -->
                    </div>
                    <!-- End #portfolio-content -->
                </div>
                <!-- End #portfolio-page -->
            </div>
            <!-- End #portfolio-wrap -->
            <div id="portfolio-filter">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <!--portfolio category-->
                            <ul class="portfolio-filter-list">
                                <li>
                                    <a class="active" href="#" data-cat="*">所有</a>
                                </li>
                                <li>
                                    <a href="#" data-cat="design">設計</a>
                                </li>
                                <li>
                                    <a href="#" data-cat="photo">攝影</a>
                                </li>
                                <li>
                                    <a href="#" data-cat="video">影片</a>
                                </li>
                                <li>
                                    <a href="#" data-cat="web">網站</a>
                                </li>
                                <li>
                                    <a href="#" data-cat="mobile">手機</a>
                                </li>
                            </ul>
                            <!--End portfolio category-->
                        </div>
                        <!-- End .col-md-12 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End #portfolio-filter -->
            <div id="portfolio-items" class="portfolio-items item_fade_in">
                <article class="design photo">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb1.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Design / Photo</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
                <article class="photo web video">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb2.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Photo / Web</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
                <article class="video design mobile">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb3.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Design / Video</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
                <article class="web photo">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb4.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Web / Photo</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
                <article class="mobile video">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb5.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Mobile</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
                <article class="photo video">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb6.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Photo / Video</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
                <article class="web mobile video">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb7.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Web / Mobile</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
                <article class="video photo web design">
                    <a href="#!projects/project1.html">
                        <img src="/assets/images/portfolio/thumb/thumb8.jpg" alt="image" />
                        <div class="overlay">
                            <i class="fa fa-camera"></i>
                            <h3>Project Title</h3>
                            <span>Video / Photo / Web</span>
                        </div>
                        <!-- End .overlay -->
                    </a>
                </article>
            </div>
            <!-- End #portfolio-items.portfolio-items -->
        </section>
        <!-- End Portfolio Section -->

        <!-- Skill Section -->
        <section id="skill" class="section-content bg1 skill-section">
            <div class="container">
                <div class="row">
                    <!-- Section Title -->
                    <div class="section-title item_bottom text-center">
                        <h1>我的<i>專業技能</i></h1>
                        <p class="tagline">I am really good at the following skills</p>
                        <div>
                            <span class="line-large"></span>
                        </div>
                    </div>
                    <!-- End Section Title -->

                    <section class="l-skill-nav item_left">
                        <!-- Skill Category -->
                        <nav class="slide-effect">
                            <a href="javascript: rotate('rotate1');" data-hover="前端開發" class="skills-pink btn-skills"><span>FrontEnd</span></a>
                            <a href="javascript: rotate('rotate2');" data-hover="程式設計" class="skills-blue btn-skills l-rMargin-20"><span>Code</span></a>
                            <a href="javascript: rotate('rotate3');" data-hover="其他" class="skills-green btn-skills"><span>Others</span></a>
                        </nav>
                        <!-- End Skill Category -->
                    </section>

                    <!-- SkillBar -->
                    <div id="pie-container" class="item_bottom">
                        <div id="l-inhalt">
                            <div id="skill-bar1" class="bar">
                                <h5 class="skill-caption"></h5>
                            </div>
                            <div id="skill-bar2" class="bar bar2">
                                <h5 class="skill-caption"></h5>
                            </div>
                            <div id="skill-bar3" class="bar bar3">
                                <h5 class="skill-caption"></h5>
                            </div>
                            <div id="skill-bar4" class="bar bar4">
                                <h5 class="skill-caption"></h5>
                            </div>
                            <div id="skill-bar5" class="bar bar5">
                                <h5 class="skill-caption"></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End SkillBar -->
                </div>
            </div>
        </section>
        <!-- End Skill Section -->

        <!-- Experience Timeline Section -->
        <section id="experience" class="section-content bg2 timeline-content">
            <div class="container">
                <!-- Section title -->
                <div class="section-title item_bottom text-center">
                    <h1>工作<i>經歷</i></h1>
                    <p class="tagline">Nothing ever becomes real till it is experienced.</p>
                    <div>
                        <span class="line-large"></span>
                    </div>
                </div>
                <!-- End Section title -->

                <div class="new-line">
                    <ol id="timeline">
                        <!-- Timeline item -->
                        <li class="timeline-item">
                            <div class="item_left">
                                <div class="well post">
                                    <div class="post-info bg2 text-center">
                                        <div class="box-inner">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <h5 class="info-date">Sep 2013 to Present</h5>
                                    </div>
                                    <div class="post-body clearfix text-right">
                                        <div class="post-title">
                                            <h4>臺灣省政府</h4>
                                            <h5>替代役</h5>
                                        </div>
                                        <div class="post-text">
                                            <p class="lipsum(1,1-50)"></p>
                                        </div>
                                        <div class="arrow-right"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Timeline item -->

                        <!-- Timeline item -->
                        <li class="timeline-item">
                            <div class="item_right">
                                <div class="well post">
                                    <div class="post-info bg2 text-center">
                                        <div class="box-inner">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <h5 class="info-date">Jul 2012 to Sep 2013</h5>
                                    </div>
                                    <div class="post-body clearfix">
                                        <div class="post-title">
                                            <h4>異客股份有限公司</h4>
                                            <h5>執行長</h5>
                                        </div>
                                        <div class="post-text">
                                            <p class="lipsum(1,1-50)"></p>
                                        </div>
                                        <div class="arrow-left"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Timeline item -->

                        <!-- Timeline item -->
                        <li class="timeline-item">
                            <div class="item_left">
                                <div class="well post">
                                    <div class="post-info bg2 text-center">
                                        <div class="box-inner">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <h5 class="info-date">Sep 2010 to Jun 2012</h5>
                                    </div>
                                    <div class="post-body clearfix text-right">
                                        <div class="post-title">
                                            <h4>痞客邦</h4>
                                            <h5>營運長</h5>
                                        </div>
                                        <div class="post-text">
                                            <p class="lipsum(1,1-50)"></p>
                                        </div>
                                        <div class="arrow-right"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Timeline item -->

                        <!-- Timeline item -->
                        <li class="timeline-item">
                            <div class="item_right">
                                <div class="well post">
                                    <div class="post-info bg2 text-center">
                                        <div class="box-inner">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <h5 class="info-date">May 2003 to Aug 2010</h5>
                                    </div>
                                    <div class="post-body clearfix">
                                        <div class="post-title">
                                            <h4>痞客邦</h4>
                                            <h5>技術長</h5>
                                        </div>
                                        <div class="post-text">
                                            <p class="lipsum(1,1-50)"></p>
                                        </div>
                                    </div>
                                    <div class="arrow-left"></div>
                                </div>
                            </div>
                        </li>
                        <!-- End Timeline item -->
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Experience Timeline Section -->

        <!-- Education Section -->
        <section id="education" class="section-content bg1">
            <div class="container">
                <!-- Section title -->
                <div class="section-title item_bottom text-center">
                    <h1><i>學歷</i></h1>
                    <p class="tagline">Education is the key to unlock the golden door of freedom.</p>
                    <div>
                        <span class="line-large"></span>
                    </div>
                </div>
                <!-- End Section title -->

                <!-- Container Text -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 edu-new-line">
                            <!-- Education 1-->
                            <div class="education item_left">
                                <div class="edu-post">
                                    <h4>資訊管理碩士</h4>
                                    <h5>華梵大學</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="edu-arrow-right"></div>
                                <div class="edu-grade text-center">
                                    <h5>2005 - 2006</h5>
                                </div>
                            </div>
                            <!-- End Education 1-->
                        </div>
                        <div class="col-md-6 col-sm-12 edu-new-line">
                            <!-- Education 2-->
                            <div class="education item_right">
                                <div class="edu-post">
                                    <h4>工業工程管理學系</h4>
                                    <h5>交通大學</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="edu-grade text-center">
                                    <h5>2001 - 2005</h5>
                                </div>
                            </div>
                            <!-- End Education 2-->
                        </div>
                        <div class="col-md-6 col-sm-12 edu-new-line">
                            <!-- Education 3-->
                            <div class="education item_left">
                                <div class="edu-post">
                                    <h4>高中</h4>
                                    <h5>道明中學</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="edu-grade text-center">
                                    <h5>1999 - 2001</h5>
                                </div>
                                <!-- End Education 3-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Container Text -->
            </div>
        </section>
        <!-- End Education Section -->

        <!-- Parallax Quote Section -->
        <div id="two-parallax" class="parallax" style="background-image: url('/assets/images/bg3.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="parallax-overlay">
                <div class="section-content">
                    <div class="container item_fade_in text-center">
                        <!-- Quote title -->
                        <h1>It's through mistakes that you actually can grow. You have to get bad in order to get good.</h1>
                        <p class="tagline">- Paula Scher -</p>
                        <!-- End Quote title -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Parallax Quote Section -->

        <!-- Contact Section -->
        <section id="contact" class="section-content bg1">
            <div class="container">
                <!-- Section title -->
                <div class="section-title item_bottom text-center">
                    <h1><i>聯絡</i>方式</h1>
                    <p class="tagline">Feel free to contact me if you have something to say!</p>
                    <div>
                        <span class="line-large"></span>
                    </div>
                </div>
                <!-- End Section title -->
            </div>

            <!-- Google maps -->
            <div id="map_canvas" class="item_fade_in"></div>
            <!-- End Google maps -->

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-respond text-center">
                        </div>
                        <form method="post" name="contactform" id="contactform" class="validate item_left" role="form">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name">名字</label>
                                    <input type="text" name="name" id="name" class="form-control input-lg required" placeholder="Enter name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control input-lg required email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="message">訊息</label>
                                    <textarea name="message" id="message" class="form-control input-lg required" rows="9" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <input type="submit" id="contactForm_submit" class="btn btn-dark" value="送出資料">
                                </div>
                            </div>
                            <input type="hidden" name="subject" value="Contact from your site">
                        </form>
                    </div>
                    <div class="col-md-4 contact-block item_right">
                        <!-- Contact Details -->
                        <h4>聯絡方式</h4>
                        <ul class="contact-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>{{ $contact->address }}
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>{{ $contact->phone }}
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <span>{{ $contact->cellphone }}
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-globe"></i>
                                <span>
                                    <a href="{{ $contact->website }}">{{ $contact->website }}</a>
                                </span>
                            </li>
                        </ul>
                        <!-- End Contact Details -->
                    </div>
                </div>
                <!-- End form contact -->
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- Back to top -->
        <a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

        <footer class="text-center">
            <!-- Footer Container -->
            <div id="three-parallax" class="parallax" style="background-image: url('/assets/images/bg1.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
                <div class="parallax-overlay parallax-background-color">
                    <div class="section-content item_top">
                        <div class="container text-center">&copy; Copyright 2014 by 交大人脈網. All Rights Reserved.
                            <!-- Footer Social Icon -->
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook-square fa-4x"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-4x"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square fa-4x"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square fa-4x"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square fa-4x"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square fa-4x"></i></a>
                            </div>
                            <!-- End Footer Social Icon -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Container -->
        </footer>

        <!-- Js Library -->
        <script type="text/javascript" src="/assets/js/modernizr.js"></script>
        <script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.sticky.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.easing-1.3.pack.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.appear.js"></script>
        <script type="text/javascript" src="/assets/js/piebar.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.maximage.js"></script>
        <script type="text/javascript" src="/assets/js/jquery-countTo.js"></script>
        <script type="text/javascript" src="/assets/js/smoothscroll.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="/assets/js/retina-1.1.0.min.js"></script>
        <script src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"></script>
        <script type="text/javascript" src="/assets/js/config.js"></script>
        <script type="text/javascript" src="/assets/js/script.js"></script>
        <!-- Js Library -->
    </body>
</html>
