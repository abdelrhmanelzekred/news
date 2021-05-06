<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Evento | Free Onepage Event Template | ShapeBootstrap</title>

{{--    @if (app()->getLocale() == 'ar')--}}
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">--}}
{{--        <link href="{{asset('news/css/bootstrap_rtl.min.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('news/css/font-awesome_rtl.min.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('news/css/main_rtl.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('news/css/animate_rtl.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('news/css/responsive_rtl.css')}}" rel="stylesheet">--}}
{{--        <script src="{{asset('news/js/html5shiv.js')}}"></script>--}}
{{--        <script src="{{asset('news/js/html5shiv.js')}}"></script>--}}
{{--        <style>--}}
{{--            body, h1, h2, h3, h4, h5, h6 {--}}
{{--                font-family: 'Cairo', sans-serif !important;--}}
{{--            }--}}
{{--        </style>--}}


{{--    @else--}}
        <link href="{{asset('news/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('news/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('news/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('news/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('news/css/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="{{asset('news/js/html5shiv.js')}}"></script>
	    <script src="{{asset('news/js/html5shiv.js')}}"></script>

{{--        @endif--}}



    <![endif]-->
    <link rel="shortcut icon" href="{{asset('news/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('news/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('news/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('news/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('news/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="stylesheet" href="https://gw.cmtelecom.com/v1.0/message">
</head><!--/head-->

<body>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
		        <div class="row">
		            <div class="navbar-header" style="
                    @if(app()->getLocale() === 'ar')
                        float:left;
                    @else
                        float:right;
                    @endif">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="#">
		                	<img class="img-responsive col-md-8"  src="{{asset('news/images/abc-news-logo-01.png')}}" alt="logo">
		                </a>
		            </div>
		            <div class="collapse navbar-collapse" style="padding: 0;">
		                <ul class="nav navbar-nav navbar-right" style="   @if(app()->getLocale() === 'ar')
                            float:right;
                        @else
                            float:right;
                            margin-right: 415px;
                        @endif">
		                    <li class="scroll active"><a href="{{route('dashboard.index')}}">@lang('site.home')</a></li>
{{--		                    <li class="scroll"><a href="#explore">Explore</a></li>--}}
		                    <li class="scroll"><a href="#event">@lang('site.news')</a></li>
		                    <li class="scroll"><a href="#about">@lang('site.about')</a></li>
{{--		                    <li class="no-scroll"><a href="#twitter">Twitter</a></li>--}}
{{--		                    <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li>--}}
		                    <li class="scroll"><a href="#contact">@lang('site.contact')</a></li>

                            @if (app()->getLocale() === 'ar')
                                <li  class="kt-nav__item kt-nav__item">
                                <a class="nav-link" href="{{ url('http://127.0.0.1:8000/en/front') }}"> English </a>
                                </li>
                            @else
                                <li  class="kt-nav__item kt-nav__item">
                                <a class="nav-link" href="{{ url('http://127.0.0.1:8000/ar/front') }}"> العربية </a>
                                </li>
                            @endif



		                </ul>

		            </div>

		        </div>

	        </div>
        </div>

    </header>

    <!--/#header-->
    <section id="home">
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
                @for($i=0; $i < $news->count() ; $i++)
				<li data-target="#main-slider" data-slide-to="{{$i+1}}"></li>
                @endfor


			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="{{asset('news/images/slider/bg1.jpg')}}" alt="slider">
				</div>
                @foreach($news as $new)
                    <div class="item">
                        <img class="img-responsive" src="{{$new->image_path}}" alt="slider">
                    </div>
                @endforeach


			</div>
		</div>
    </section>
	<!--/#home-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch" style="

                @if(app()->getLocale() === 'ar')
                    float: right;
                    position: absolute;
                    left: 1000px;
                    top: 7%;
                @else
                    float:left;
                    width: 59.666667%;

                @endif
                    ">
					<img class="img-responsive" src="{{asset('news/images/watch.png')}}" alt="">
				</div>
				<div class="col-md-4 col-md-2 col-sm-5" style="
                @if(app()->getLocale() === 'ar')
                    float: right;
                    width: 57.666667%;
                @else
                    float:left;
                    width: 40%;

                @endif">
					<h2>@lang('site.ournext')</h2>
				</div>
				<div class="col-sm-7 col-md-6" style="
                @if(app()->getLocale() === 'ar')
                    float: left;
                    margin-left: -8%;

                @else
                    float:right;
                   width:  50%;
                @endif
                    ">
					<ul id="countdown">
						<li>
							<span class="days time-font">{{$date->day}}</span>
							<p>@lang('site.day') </p>
						</li>
						<li>
							<span class="hours time-font">{{$date->hour}}</span>
							<p class="">@lang('site.hour') </p>
						</li>
						<li>
							<span class="minutes time-font">{{$date->minute }}</span>
							<p class="">@lang('site.miunte')</p>
						</li>
						<li>
							<span class="seconds time-font">{{$date->second}}</span>
							<p class="">@lang('site.second')</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="cart">
				<a href="#"><i class="fa fa-shopping-cart"></i> <span>Purchase Tickets</span></a>
			</div>
		</div>
	</section><!--/#explore-->

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-7">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">@lang('site.the_news')</h2>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="{{asset('news/images/event/event1.jpg')}}" alt="event-image">
                                            <h4>Chester Bennington</h4>
                                            <h5>Vocal</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="{{asset('news/images/event/event2.jpg')}}" alt="event-image">
                                            <h4>Mike Shinoda</h4>
                                            <h5>vocals, rhythm guitar</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="single-event">
                                            <img class="img-responsive" src="{{asset('news/images/event/event3.jpg')}}" alt="event-image">
                                            <h4>Rob Bourdon</h4>
                                            <h5>drums</h5>
                                        </div>
                                    </div>
                                </div>

							</div>
                            <div class="item">
                                <div class="row">
                                    @foreach($news as $new)
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-event">
                                                <img class="img-responsive" src="{{$new->image_path}}" alt="event-image">
                                                <h4>{{$new->title}}</h4>
                                                <h5>{{$new->description}}</h5>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<div class="guitar">
					<img class="img-responsive" src="{{asset('news/images/guitar.png')}}" alt="guitar">
				</div>
			</div>
		</div>
	</section><!--/#event-->

	<section id="about">
		<div class="guitar2">
			<img class="img-responsive" src="{{asset('news/images/guitar2.jpg')}}" alt="guitar">
		</div>
		<div class="about-content">
					<h2>@lang('site.aboutevanto')</h2>
					<p>@lang('site.aboutnews')</p>
					<a href="#" class="btn btn-primary">@lang('site.viewdate') <i class="fa fa-angle-right"></i></a>

		</div>
	</section><!--/#about-->

	<section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="{{asset('news/images/twit.png')}}" alt="twit">
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="text-center carousel-inner center-block">
						<div class="item active">
							<img src="{{asset('news/images/twitter/twitter1.png')}}}" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="{{asset('news/images/twitter/twitter2.png')}}}" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="{{asset('news/images/twitter/twitter3.png')}}}" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</section><!--/#twitter-feed-->

	<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h2>Sponsors</h2>
						<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor1.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor2.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor3.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor4.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor5.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor6.png'))}}" alt=""></a></li>
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor6.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor5.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor4.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor3.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor2.png'))}}" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="{{asset(('news/images/sponsor/sponsor1.png'))}}" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="light">
				<img class="img-responsive" src="{{asset('news/images/light.png')}}" alt="">
			</div>
		</div>
	</section><!--/#sponsor-->

	<section id="contact">
		<div id="map">
			<div id="gmap-wrap">
	 			<div id="gmap">
	 			</div>
	    	</div>
		</div><!--/#map-->
        <div class="contact-section">
            <div class="ear-piece">
                <img class="img-responsive" src="{{asset('news/images/ear-piece.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-sm-4" style="
                    @if(app()->getLocale() === 'ar')
                        float:left;
                        margin-left: 28%;
                    @else
                        float:right;
                        margin-right: 16%;

                    @endif
                        ">
                        <div class="contact-text">
                            <h3>@lang('site.contact')</h3>
                            <address>
                                E-mail: promo@party.com<br>
                                Phone: +1 (123) 456 7890<br>
                                Fax: +1 (123) 456 7891
                            </address>
                        </div>
                        <div class="contact-address">
                            <h3>@lang('site.contact')</h3>
                            <address>
                                Unit C2, St.Vincent's Trading Est.,<br>
                                Feeder Road,<br>
                                Bristol, BS2 0UY<br>
                                United Kingdom
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-5"  style="
                    @if(app()->getLocale() === 'ar')
                        float:right;
                    @else
                        float: left;
                    @endif
                        ">
                        <div id="contact-section">
                            <h3>@lang('site.send_message')</h3>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{route('front.store')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="@lang('site.name')">
                                </div>
                                <div class="form-group">
                                    <input type="phone" name="phone" class="form-control" required="required" placeholder="@lang('site.phone')">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="@lang('site.email')">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="@lang('site.Enter_your_message')"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">@lang('site.send')</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials._session')

        @include('partials._errors')

    </section>
    <!--/#contact-->


    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2014<a target="_blank" href="http://shapebootstrap.net/"> Evento </a>Theme. All Rights Reserved. <br> Designed by <a target="_blank" href="http://shapebootstrap.net/">ShapeBootstrap</a></p>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="{{asset('news/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('news/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="{{asset('news/js/gmaps.js')}}"></script>
	<script type="text/javascript" src="{{asset('news/js/smoothscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('news/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('news/js/coundown-timer.js')}}"></script>
    <script type="text/javascript" src="{{asset('news/js/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('news/js/jquery.nav.js')}}"></script>
    <script type="text/javascript" src="{{asset('news/js/main.js')}}"></script>
    @if (session('success'))

        <script>
            new Noty({
                type: 'success',
                layout: 'topRight',
                text: "{{ session('success') }}",
                timeout: 2000,
                killer: true
            }).show();
        </script>

    @endif

</body>
</html>



