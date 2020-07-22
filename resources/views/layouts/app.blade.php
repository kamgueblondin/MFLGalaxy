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

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('images/logo.png') }}" rel="shortcut icon">
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	  
	<!-- font awesome core CSS -->
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/mflgalaxy.css') }}" rel="stylesheet">

</head>

<body>
  <!-- Header Start Here -->
  <div class="heading-mrg">
	 <div class="container">
		<div class="row">
			  <div class="col-12 col-sm-4 col-md-5 col-lg-4 d-flex justify-content-center justify-content-md-start"><a href="{{ url('/') }}"> <img class="logo" src="{{asset('images/logo.png') }}" class="class-ace-logo" width="90" alt="MFLGaxaly Tuition" /></a>
			  </div>
			  <div class="col-12 col-sm-7 col-md-4 col-lg-4 d-flex justify-content-center justify-content-md-end">
				 <div class="header-text">
					<h3>@lang('Language Tuition')</h3>
					<span>@lang('Think naturally, Learn naturally, Speak naturally')</span>
				 </div>
			  </div>
			  
			  <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block col-md-3 col-lg-4">
				<div class="row">
					<div class="col">
					</div>
					<div class="col">
					    <table align="right">
							<tr>
							@foreach(config('app.locales') as $locale)
								@if($locale == 'de')
								<td><a href="{{ route('language', $locale) }}" style="text-decoration:none;">Deutsch</a></td>
								@elseif($locale == 'en')
								<td><a href="{{ route('language', $locale) }}" style="text-decoration:none;">English</a></td>
								@endif
							@endforeach
							</tr>
							<tr>
							@foreach(config('app.locales') as $locale)
								@if($locale == 'fr')
								<td><a href="{{ route('language', $locale) }}" style="text-decoration:none;">Français</a></td>
								@elseif($locale == 'es')
								<td><a href="{{ route('language', $locale) }}" style="text-decoration:none;">Español</a></td>
								@endif
							@endforeach
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	 </div>
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-lite bg-lite colorline">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mySidenav" aria-controls="mySidenav" aria-expanded="false" aria-label="Toggle navigation">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-facebook" target="blank" href="#"><span class="fa fa-facebook"></span></a></li>
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-twitter" target="blank" href="https://twitter.com/GalaxyMfl"><span class="fa fa-twitter"></span></a></li>
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-linked" target="blank" href="#"><span class="fa fa-linkedin"></span></a></li>
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-gplus" target="blank" href="#"><span class="fa fa-google-plus"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid">

    <!-- Content Row -->
    <div class="row mt-0">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
	  <div class="container  navbar-collapse collapse d-lg-block d-xl-block" id="mySidenav">
		<ul class="min-menu navbar-nav">
				<li class="sub-menu" style="color:#002493;"><a href="{{url('/')}}" style="color:#002493;"> @lang('Home')</a><span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				 <ul class="su-menu" type="-" aria-labelledby="dropdownMenu2">
					<li><a href="{{ route('about_us') }}">@lang('About Us')</a></li>
					<li><a href="{{ route('our_goals') }}">@lang('Our Goals')</a></li>
					<li><a href="{{ route('our_services') }}">@lang('Our Services')</a></li>
					<li><a href="{{ route('testimonials') }}">@lang('Testimonials')</a></li>
					<li><a href="{{ route('blogs') }}">@lang('Blogs')</a></li>
				   
				</ul>
				 </li>
				 <li class="sub-menu" style="color:#002493;"><a href="javascript:void(0);" style="color:#002493;"> @lang('My choice')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					<li><a href="{{ route('french') }}">@lang('French')</a></li>
					<li><a href="{{ route('spanish') }}">@lang('Spanish')</a></li>
					<li><a href="{{ route('german') }}">@lang('German')</a></li>
				  </ul>
				 </li>
				<li class="sub-menu" style="color:#002493;"><a href="{{ route('class_structure') }}" style="color:#002493;"> @lang('Classes')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
						<li><a href="{{ route('gallery') }}">@lang('Photo Gallery')</a></li>
						<li><a href="{{ route('class_structure') }}">@lang('Class Structure')</a></li>

						<li><a href="{{ route('faq') }}">@lang('FAQ')</a></li>
					</ul>
				 </li>
				 <li class="sub-menu" style="color:#002493;"><a href="javascript:void(0);" style="color:#002493;"> @lang('Contact Us')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					  <li><a href="{{ route('enquiry_form') }}">@lang('Enquiry Form')</a></li>
					  <li><a href="{{ route('more_infos') }}">@lang('More Infos')</a></li>
				  </ul>
				 </li>
				 <li class="sub-menu d-block d-sm-block d-md-block d-lg-none d-xl-none" style="color:#002493;">
					<a href="javascript:void(0);" style="color:#002493;"> 
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
		<div class="txt-h-right mt-2 d-none d-sm-none d-md-none d-lg-block d-xl-block mt-5"> 
			@lang('Click') <span class="gray-clr"><a href="{{ route('enquiry_form') }}">@lang('here') </a></span>@lang('to submit enquiry')<br/>
			@lang('Please email us at') <span class="gray-clr"><a href="mailto:Mfl_galaxy2020@yahoo.com"> Mfl_galaxy2020@yahoo.com</a></span><br/>
			@lang('Put your phone number in the email')<br/>
			@lang('Leave voicemail at') <span class="gray-clr">00447437465586</span><br/>
		</div>
		</div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
	  @yield('content')
	  </div>
	</div>
  </div>
  <!-- /.container -->
  
  <!-- Footer -->

  <footer class="py-2 bg-lite colorline">
	  <div class="container-fluid text-center">
			<div class="">Copyright &copy; {{ date('Y') }} <a href="{{ route('login') }}" title="@lang('Login')">MFLGalaxy</a> @lang('Right Reserved'). </div>
			<div class="cont-footer d-flex">
				<ul>
				<li> <a target="blank"  href="#"> <i class="fa fa-facebook"></i></a></li>
				<li> <a target="blank"  href="https://twitter.com/GalaxyMfl"><i class="fa fa-twitter"></i></a></li>
				<li> <a  target="blank" href="#"><i class="fa fa-linkedin"></i></a></li>
				<li> <a target="blank"  href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		 </div>
  </footer>
  <!-- /foot -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>