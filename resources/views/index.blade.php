@extends('layouts.app')
    @section("title") {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
 <header>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" role="listbox">
				<!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image: url('{{asset('images/banners/580.jpg') }}')">
				  <div class="carousel-caption d-none d-md-block">
					<h3>@lang('Online Course')</h3>
					<p>@lang('Good news !!! We provide customized tuition via online sessions. It doesn\'t matter where you live as long as you have a laptop/ipad, broadband connection and a headphone. We teach using the proven framework & methodologies that has enabled our large number of students to get selected into the top grammar schools(QE Boys, Wilson, Olave\'s, Tiffin etc.) and independent schools(Eton, Westminster, City of London Boys, Sevenoaks, King\'s College). We specialise in both GL and CEM format.')</p>
				  </div>
				</div>
				<!-- Slide Two - Set the background image for this slide in the line below 1900x1080 -->
				<div class="carousel-item" style="background-image: url('{{asset('images/banners/1441.jpg') }}')">
				  <div class="carousel-caption d-none d-md-block">
					<h3>@lang('RESULTS')</h3>
					<p>@lang('We have achieved wonderful success in 2019 exams.') <br>
					*  QE/Wilson/St.Olaves:  45 @lang('selections') <br>
					* Newstead Wood : 51 @lang('selections') <br>
					* Kent : @lang('Over 100 Selections')   <br>
					* Bexley : @lang('Over 100 Selections') <br>
					<br>
					@lang('Students received offers including scholarship from various top private schools') - Sevenoaks (over 10), City of London Boys, Alleyn's, Habs Boys, King's College, Dulwich, Eton, Westminster etc.
					</p>
				  </div>
				</div>
				<!-- Slide Three - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('{{asset('images/banners/2284.jpg') }}')">
				  <div class="carousel-caption d-none d-md-block">
					<h3>@lang('Online courses Experts')</h3>
					<p>@lang('As our classes are now conducted ONLINE, we can accommodate more students. Please drop an enquiry and we will contact you shortly. Our Year 5 classes are customized for specific grammar and private schools. Most of our students are toppers from various state and private schools. We train them with the best strategy and material which is evident in our fabulous results.')</p>
				  </div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">@lang('Previous')</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">@lang('Next')</span>
			  </a>
			</div>
		  </header>
		  <!-- /end header -->
		  <!-- marquee for the explication -->
		  <div class="black-box">
			  <marquee direction="left" scrollamount="5" behavior="scroll">
				@lang('**Due to the recent coronavirus pandemic,  we now offer ONLINE classes and students absolutely love it.        **2020 Results  **QE Boys topper 280/280 is our student.   **Students passed in Westminster, Eton and Tonbridge Boys.                    Congratulations to 5 students who passed 10 plus exam (CLSB, Whitgift, Trinity)             2019  EXAM RESULTS  - QE/WILSON/OLAVE - 45 SELECTIONS                   **  KENT (GL) - OVER 100 SELECTIONS         ** BEXLEY (CEM) - OVER 100 SELECTIONS       **NEWSTEAD - 51 SELECTIONS')
			  </marquee>
		  </div>
		  <!-- Page Content -->
	  <div class="container-fluid">

		<h1 class="my-4">Welcome to MFLGalaxy</h1>

		<!-- Marketing Icons Section -->
		<div class="row">
		  <div class="col-lg-4 mb-4">
			<div class="card h-100">
			  <h4 class="card-header">@lang('WHAT WE DO')</h4>
			  <div class="card-body">
				<p class="card-text">@lang('Good news!! We now provide online tuition and it is a big success with the existing students. It doesn\'t matter where you live in England, you can now join our online tuition as long as you have a laptop/ipad/pc, headphone and a broadband connection.')</p>
			  </div>
			  <div class="card-footer">
				@lang('Click') <a href="#" class="btn btn-primary">@lang('here')</a> @lang('to know more about us.')
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 mb-4">
			<div class="card h-100">
			  <h4 class="card-header">@lang('OUR TARGET SCHOOLS')</h4>
			  <div class="card-body">
				<p>@lang('We target the following schools for 11 Plus exams:')  </p>
                      <ul>
                       <li>St. Olave's, Orpington</li>
                          <li>@lang('The Judd School'), Tonbridge</li>
                          <li>@lang('Dartford Grammar'), Dartford</li>
                          <li>@lang('Newstead Wood'), Orpington</li>
                          <li>@lang('Tonbridge Grammar')</li>
                          <li>Wilson's School, Wallington</li>
                          <li>QE Boys; Henrietta Barnet</li>
                          <li>@lang('Other Kent and Bexley schools')</li>
                          <li>@lang('Private Schools (scholarships)')</li>

                      </ul>
				</div>
			  <div class="card-footer">
				@lang('Click') <a href="#" class="btn btn-primary">@lang('here')</a> @lang('to know more about us.')
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 mb-4">
			<div class="card h-100">
			  <h4 class="card-header">@lang('OUR RESULTS')</h4>
			  <div class="card-body">
				<p>@lang('Our latest results are:') </p>
				  <ul>
					 <li>QE/Olave/Wilson: 45 @lang('selections')</li>
					  <li>Kent: 100 @lang('selections')</li>
					  <li>Bexley: 100 @lang('selections')</li>
					  <li>Newstead Wood 2019: 51 @lang('selections')s</li>
					  <li>@lang('Independent') (11 Plus): 25 @lang('selections')</li>
					  <li>@lang('Independent') (10 Plus): 5 @lang('selections')</li>

				  </ul>
				</p>
			  </div>
			  <div class="card-footer">
				@lang('Click') <a href="#" class="btn btn-primary"> @lang('here')</a> @lang('for detailed results')
			  </div>
			</div>
		  </div>
		</div>
		<!-- /.row -->
		<h2>@lang('Latest News')</h2>
		<div class="clearfix"></div>
		  <div class="col-md-12">
		   <div class="news-section-ace-hm">
			   <div class="block-hdnews" >
				  <div class="list-wrpaaer">
					<ul class="list-aggregate" id="marquee-vertical" >
						<li>
							 @lang('To enquire, please complete the Additional Information Form (under Contact Us).  It is NOT the Contact Us form').

						</li>
						<li>
							 @lang('COVID-19 Update: Due to the recent coronavirus pandemic, we have started online classes and have received wonderful feedback from the existing tuition students. See class schedule for timings').
						</li>
						<li>
							 @lang('Good news !! We have spaces as all classes are now conducted ONLINE').

						</li>
					</ul>
					<div class="clearfix"></div>
			  </div>
		   </div>
	    </div>
		<!-- Section -->
		<h2>MFLGalaxy</h2>

		<div class="row">
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/img-box.png')}}" alt=""></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a  style="text-decoration:none;" href="{{ route('about_us') }}">@lang('Why') MFLGalaxy?</a>
				</h4>
				<p class="card-text">@lang('Want to get success in exam and know more about our tuition')?</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/img-box2.png')}}" alt=""></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('our_goals') }}">@lang('Our Goal')</a>
				</h4>
				<p class="card-text">@lang('See our stupendous success in exams').</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/img-box3.png')}}" alt=""></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('testimonials') }}"> @lang('Testimonials')</a>
				</h4>
				<p class="card-text">@lang('See what parents say about us').</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/fr.png')}}" alt=""></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('french') }}">@lang('French classes')</a>
				</h4>
				<p class="card-text">@lang('Want to know what we cover in the classes').</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/es.png')}}" alt=""></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('spanish') }}"> @lang('Spanish classes')</a>
				</h4>
				<p class="card-text">@lang('Want to know what day/time the classes are held').</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/tes.png')}}" alt="" /></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('adult_classes') }}"> @lang('Mock / Revision Course / adult classes')</a>
				</h4>
				<p class="card-text">@lang('Want to know more about extension classes')</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/serv.png')}}" alt=""></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('our_services') }}"> @lang('Services')</a>
				</h4>
				<p class="card-text">@lang('Our range of advisory services to build strategy for your success').</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/blog.png')}}" alt=""></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('blogs') }}">Blogs &amp; @lang('News')</a>
				</h4>
				<p class="card-text">@lang('Watch out for news, blogs &amp; updates').</p>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
			  <a href="#"><img class="img-card" src="{{asset('images/conta.png')}}" alt="" /></a>
			  <div class="card-body">
				<h4 class="card-title">
				  <a style="text-decoration:none;" href="{{ route('enquiry_form') }}">@lang('Contact Us')</a>
				</h4>
				<p class="card-text">@lang('We are generally over-subscribed. Contact us now').</p>
			  </div>
			</div>
		  </div>
		</div>
		<!-- /.row -->
		
		</div>
	</div>
@endsection