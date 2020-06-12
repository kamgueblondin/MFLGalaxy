<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- #############################kamgue**blondin#####################################################-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="KAMGUE Blondin" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>@yield('title')</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('images/icon.png') }}" rel="shortcut icon">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Custom CSS -->
        <link href="{{ asset('css/ace-tuition.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/demo.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('ui/1.11.4/themes/smoothness/jquery-ui.css') }}">
        <!-- js files -->
        <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" language="javascript" src="{{asset('js/flaunt.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>

        <script src="{{asset('ui/jquery-1.10.2.js')}}"></script>
        <script src="{{asset('ui/1.11.4/jquery-ui.js')}}"></script>

	   <script>
		  $(function() {
			$( "#datepicker" ).datepicker();
			$( "#datepicker" ).datepicker( "option", "dateFormat", "dd/mm/yy" );
		  });
	   </script>
	   <script type="text/javascript" language="javascript" src="{{asset('js/backtotop.js')}}"></script>
        <!-- Custom CSS -->
        <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet" />
   </head>
   <body>
     <div id="main"></div>
      <!-- Header Start Here -->
      <div class="heading-mrg">
         <div class="container">
            <div class="row">
                  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4"><a href="{{url('/')}}"> <img src="{{ asset('images/logo.png') }}" class="class-ace-logo" alt="MFLGalaxy" /></a>
                  </div>
                  <div class="col-xs-6 col-sm-12 col-md-4 col-lg-4">
                     <div class="header-text">
                        <h3>@lang('French and Spanish courses')</h3>
                        <span>@lang('MAXIMIZE YOUR LINGUISTIC POTENTIAL')</span>
                     </div>
                  </div>
                  <div class="hidden-xs col-md-5 col-lg-4 text-right">
                     <div class="txt-h-right ">
                        @lang('Click') <span class="gray-clr"><a href="#">@lang('here') </a></span>@lang('to submit enquiry')<br/>
                        @lang('Please email us at') <span class="gray-clr">contact@mflgalaxy.com</span><br/>
                        @lang('Don\'t forget to put your phone number in the email')<br/>
                        @lang('Leave voicemail at') <span class="gray-clr">000 000 00000</span><br/>
                        @lang('8am-7pm; 7 days a week')
                     </div>
                   </div>
            </div>
         </div>
      </div>
      <div class="clr-line"></div>
      <!-- Header End Here -->
      <!-- Menu Start Here -->
      <div class="container">
            <span class="menu-icon" onclick="openNav()">&#9776;</span>
            <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="banner-img-block">
			<img src="{{asset('images/logo.png')}}" alt="" />
			<div class="img-responsive-logo"></div>
		</div>
          <ul class="min-menu">
				<li class="sub-menu"><a href="{{url('/')}}">@lang('Home')</a><span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				 <ul class="su-menu">
					<li><a href="{{ route('about_us') }}">@lang('About Us')</a></li>
						<li><a href="{{ route('our_goals') }}">@lang('Our Goals')</a></li>
						<li><a href="{{ route('our_services') }}">@lang('Our Services')</a></li>
						<li><a href="{{ route('testimonials') }}">@lang('Testimonials')</a></li>
						<li><a href="{{ route('blogs') }}">@lang('Blogs')</a></li>
					   <li><a href="{{ route('legal_documents') }}">@lang('Legal documents')</a></li>
					</ul>
				 </li>
				 <li class="sub-menu"><a href="#">@lang('My choice')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					<li><a href="{{ route('french') }}">@lang('French')</a></li>
					<li><a href="{{ route('spanish') }}">@lang('Spanish')</a></li>
				  </ul>
				 </li>
				<li class="sub-menu"><a href="#">@lang('Classes')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
						<li><a href="{{ route('gallery') }}">@lang('Photo Gallery')</a></li>
						<li><a href="{{ route('class_structure') }}">@lang('Class Structure')</a></li>
						<li><a href="{{ route('extension_classes') }}">@lang('Extension Classes')</a></li>
						<li><a href="{{ route('adult_classes') }}">@lang('Adult Classes')</a></li>
						<li><a href="{{ route('target_schools') }}">@lang('Target Schools')</a></li>
						<li><a href="{{ route('useful_links') }}">@lang('Useful Links')</a></li>
						<li><a href="{{ route('faq') }}">@lang('FAQ')</a></li>
					</ul>
				 </li>
				 <li class="sub-menu"><a href="javascript:void(0);">@lang('Contact Us')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					  <li><a href="{{ route('enquiry_form') }}">@lang('Enquiry Form')</a></li>
					  <li><a href="{{ route('more_infos') }}">@lang('More Infos')</a></li>
				  </ul>
				 </li>
				 <li class="sub-menu">
					<a href="javascript:void(0);">
					@if(app()->getLocale() == 'fr')
						Français
					@elseif(app()->getLocale() == 'es')
						Español
					@elseif(app()->getLocale() == 'de')
						Deutsch
					@else
						English
					@endif
					</a>
				<span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					@foreach(config('app.locales') as $locale)
					<li>
						<a href="{{ route('language', $locale) }}">
							@if($locale == 'fr')
								Français
							@elseif($locale == 'es')
								Español
							@elseif($locale == 'de')
								Deutsch
							@else
								English
							@endif
						</a>
					</li>
					@endforeach
				  </ul>
				 </li>
             </ul>
          </div>
			  <ul class="navbar-nav for-social-width">
				 <li><a class="btn btn-social-icon btn-facebook" target="blank" href="#"><span class="fa fa-facebook"></span></a></li>
				 <li><a class="btn btn-social-icon btn-twitter" target="blank" href="#"><span class="fa fa-twitter"></span></a></li>
				 <li><a class="btn btn-social-icon btn-linked" target="blank" href="#"><span class="fa fa-linkedin"></span></a></li>
				 <li><a class="btn btn-social-icon btn-gplus" target="blank" href="#"><span class="fa fa-google-plus"></span></a></li>
			  </ul>
          </div>
    <!-- Min Top Menu Start Here  -->
	<script type="text/javascript">
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			$("body").css({
				"margin-left": "250px",
				"overflow-x": "hidden",
				"transition": "margin-left .5s",
				"position": "fixed"
			});
			$("#main").addClass("overlay");
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			$("body").css({
				"margin-left": "0px",
				"transition": "margin-left .5s",
				"position": "relative"
			});
			$("#main").removeClass("overlay");
		}
	</script>
		<!-- Min Top Menu Start End  -->
	<script>
		var doc_width = $(window).width();
		if (doc_width < 767) {
			$(".arrow-i-fa").on("click", function(){
				$(this).parent(".sub-menu").toggleClass("active");
				$(this).parent().siblings().removeClass("active");
			});
		}
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109162283-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-109162283-2');
	</script>
	  @yield('content')
	  <!-- Footer End -->
	  <script src="{{asset('js/bootstrap.min.js')}}"></script>
	  <script type="text/javascript">
	  marqueeInit({
	  uniqueid: 'mycrawler',
	  style: {
		  'padding': '5px',
		  'width': '450px',
		  'background': 'lightyellow',
		  'border': '1px solid #CC3300'
	  },
	  inc: 5,
	  mouse: 'cursor driven',
	  moveatleast: 2,
	  neutral: 150,
	  persist: true,
	  savedirection: true
	  });
	  </script>

	<script type="text/javascript" language="javascript" src="{{asset('js/jquery.marquee.js')}}"></script>
	<script type="text/javascript">

	  $(function(){


	  $('#marquee-vertical').marquee();
	  $('#marquee-horizontal').marquee({direction:'horizontal', delay:0, timing:50});

	});

	$(function() {
		$('marquee').mouseover(function() {
			$(this).attr('scrollamount',0);
		}).mouseout(function() {
			 $(this).attr('scrollamount',5);
		});
	});

	</script>
     <!-- Footer Start -->
      <div class="footer-mains">

      <div class="clr-line"></div>
      <div class="contds">
          <div class="container">
             <div class="row">

                 <div class="col-md-4">

                     <div class="copy-pading">Copyright &copy; 2020 <a href="{{ route('login') }}" title="@lang('Login')">MFLGalaxy</a> @lang('Right Reserved'). </div>

                 </div>
                 <div class="col-md-3">
                       <div class="cont-footer">
                     <ul>
                        <li>@lang('Follow us')</li>
                        <li> <a target="blank"  href="#"> <i class="fa fa-facebook"></i></a></li>
                        <li> <a target="blank"  href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a  target="blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li> <a target="blank"  href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                  </div>
                 </div>
                 <div class="col-md-5">
                      <div class="developed-right-txt">@lang('Website Developed by') <a href="#" target="_blank"></a></div>
                 </div>
             </div>
          </div>
      </div>
      <a class="cd-top hidden-xs hidden-sm" href="#0">Top</a>
        <script type="text/javascript">

        $('#monitor').html($(window).width());

        $(window).resize(function() {
            var viewportWidth = $(window).width();
            $('#monitor').html(viewportWidth);
        });
        </script>
   </body>
</html>
