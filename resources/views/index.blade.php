@extends('layouts.app')
    @section("title") {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
  <!-- Slider Start Here -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">

            <div class="item active">
               <img src="{{asset('uploads/banners/2284.jpg')}}" alt="slider" />
               <div class="carousel-caption">
                  <h2>@lang('Online Course')</h2>
                  <p>@lang('Good news !!! We provide customized tuition via online sessions. It doesn\'t matter where you live as long as you have a laptop/ipad, broadband connection and a headphone. We teach using the proven framework & methodologies that has enabled our large number of students to get selected into the top grammar schools(QE Boys, Wilson, Olave\'s, Tiffin etc.) and independent schools(Eton, Westminster, City of London Boys, Sevenoaks, King\'s College). We specialise in both GL and CEM format.')<br/> <br/>
                 <!-- <p class="text-center"><a href="#" class="btn-more"> Read More</a></p></p> -->
               </div>
            </div>

       <div class="item">
               <img src="{{asset('uploads/banners/123.jpg')}}" alt="slider" />
               <div class="carousel-caption">
                  <h2>@lang('Online Course')</h2>
                  <p>@lang('Good news !!! We provide customized tuition via online sessions. It doesn\'t matter where you live as long as you have a laptop/ipad, broadband connection and a headphone. We teach using the proven framework & methodologies that has enabled our large number of students to get selected into the top grammar schools(QE Boys, Wilson, Olave\'s, Tiffin etc.) and independent schools(Eton, Westminster, City of London Boys, Sevenoaks, King\'s College). We specialise in both GL and CEM format.')<br/> <br/>
               </div>
            </div>
                         <div class="item">
               <img src="{{asset('uploads/banners/1441.jpg')}}" alt="slider" />
                <div class="carousel-caption">
                  <h2>@lang('RESULTS')</h2>
                  <p>@lang('We have achieved wonderful success in 2019 exams.') <br>
					*  QE/Wilson/St.Olaves:  45 @lang('selections') <br>
					* Newstead Wood : 51 @lang('selections') <br>
					* Kent : @lang('Over 100 Selections')   <br>
					* Bexley : @lang('Over 100 Selections') <br>
					<br>

@lang('Students received offers including scholarship from various top private schools') - Sevenoaks (over 10), City of London Boys, Alleyn's, Habs Boys, King's College, Dulwich, Eton, Westminster etc. <br/> <br/>
                <!--  <p class="text-center"><a href="#" class="btn-more"> Read More</a></p></p> -->
               </div>
            </div>
            <div class="item">
               <img src="{{asset('uploads/banners/580.jpg')}}" alt="slider" />
                <div class="carousel-caption">
                  <h2>@lang('Online courses Experts')</h2>
                  <p>@lang('As our classes are now conducted ONLINE, we can accommodate more students. Please drop an enquiry and we will contact you shortly. Our Year 5 classes are customized for specific grammar and private schools. Most of our students are toppers from various state and private schools. We train them with the best strategy and material which is evident in our fabulous results.') <br/> <br/>
                <!--  <p class="text-center"><a href="#" class="btn-more"> Read More</a></p></p> -->
               </div>
            </div>
            
         </div>
         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span aria-hidden="true"><img src="{{asset('images/slider-left.png')}}" alt="" /></span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span aria-hidden="true"><img src="{{asset('images/slider-right.png')}}" alt="" /></span>
         </a>
      </div>
      <!-- Slider End Here -->

      <!-- body cont Start -->
      <div class="black-box">
      <div class="container">

         <marquee behavior="scroll" direction="left" scrollamount="5" >@lang('**Due to the recent coronavirus pandemic,  we now offer ONLINE classes and students absolutely love it.        **2020 Results  **QE Boys topper 280/280 is our student.   **Students passed in Westminster, Eton and Tonbridge Boys.                    Congratulations to 5 students who passed 10 plus exam (CLSB, Whitgift, Trinity)             2019  EXAM RESULTS  - QE/WILSON/OLAVE - 45 SELECTIONS                   **  KENT (GL) - OVER 100 SELECTIONS         ** BEXLEY (CEM) - OVER 100 SELECTIONS       **NEWSTEAD - 51 SELECTIONS')           </marquee>

      </div>


      </div>
      <div class="box-mains">
         <div class="container padding-bx">
            <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="box-3">
                 <h3>@lang('WHAT WE DO')</h3>
                     <p class="inx-pgs">
 @lang('Good news!! We now provide online tuition and it is a big success with the existing students. It doesn\'t matter where you live in England, you can now join our online tuition as long as you have a laptop/ipad/pc, headphone and a broadband connection.  Over 95% tuition parents are delighted with the online classes. We teach using the proven framework, tools & methodologies that has enabled our large number of students to get selected into the top grammar schools (GL, CEM, Super-selective) and independent schools with scholarship. Our classes are only for Year 4 and Year 5 children. Click')<a href="#">@lang('here')</a> @lang('to know more about us.')
                      </p>
                  </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="box-3">
                 <h3>@lang('OUR TARGET SCHOOLS')</h3>
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
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="box-3">
                 <h3>@lang('OUR RESULTS')</h3>
                                   <!-- <p>Our results for Sep 2019 are: </p> -->
                  <p>@lang('Our latest results are:') </p>
                      <ul>
						 <li>QE/Olave/Wilson: 45 @lang('selections')</li>
						  <li>Kent: 100 @lang('selections')</li>
						  <li>Bexley: 100 @lang('selections')</li>
						  <li>Newstead Wood 2019: 51 @lang('selections')s</li>
						  <li>@lang('Independent') (11 Plus): 25 @lang('selections')</li>
						  <li>@lang('Independent') (10 Plus): 5 @lang('selections')</li>

                      </ul>
                     <p>@lang('Click')<a href="#"> @lang('here')</a> @lang('for detailed results')</p>
                  </div>
                  </div>
                  <!-- invisible boxes -->
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="display:none">
                  <div class="box-3">

                  http://www.thetutorpages.com/tutor/11plus-tutor-bromley-kent-bexley
                  http://www.netmums.com/bromley/local/view/after-school-activities/academic-and-languages/11-tutor-bromley-kent-bexley
                  http://www.ace11plustuition.orpington1st.co.uk/
                  http://acetuition.brandyourself.com/
                  https://www.facebook.com/ace11plustuition
                  https://uk.linkedin.com/in/acetuition
                  https://twitter.com/ACE_Tuition
                  https://plus.google.com/+Ace11plustuitionCoUk1


                      </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="display:none">
                     <div class="box-3">

                      St. Olave's, Orpington
                      The Judd School, Tonbridge
                      Dartford Grammar, Dartford
                      Skinners, Tunbridge Wells
                      Newstead Wood
                      Bexley Grammar
                      Beth Grammar
                      Chislehurst & Sidcup
                      Townley Grammar
                      Wilmington Grammar
                      Wilson's School, Wallington
                      Sutton Grammar, Sutton

                      </div>
                  </div>
              <div class="clearfix"></div>
                  <div class="col-md-12">
                   <div class="news-section-ace-hm">
                       <div class="block-hdnews" >
                          <div class="list-wrpaaer">
                            <div class="news-sections">@lang('Latest News')</div>
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
                          </div><!-- list-wrpaaer -->
                      </div> <!-- block-hdnews -->
                   </div>
             </div>
			 
             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box.png')}}" alt="" /></div>
                  <div class="tex-boxx">

                     <div class="heading-box1"><a  style="text-decoration:none;" href="{{ route('about_us') }}">@lang('Why') MFLGalaxy?</a>	</div>
                     @lang('Want to get success in exam and know more about our tuition')?

                  </div>
                  <div class="clr"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box2.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"> <a style="text-decoration:none;" href="{{ route('our_goals') }}">@lang('Our Goal')</a></div>
                    @lang('See our stupendous success in exams').
                  </div>
                 <div class="clr"></div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box3.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"> <a style="text-decoration:none;" href="{{ route('testimonials') }}"> @lang('Testimonials')</a></div>
                     @lang('See what parents say about us').
                  </div>
                  <div class="clr"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/fr.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="{{ route('french') }}">	@lang('French classes')</a></div>
                     @lang('Want to know what we cover in the classes')
                  </div>
                  <div class="clr"></div>
                   </div>
               </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/es.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"> <a style="text-decoration:none;" href="{{ route('spanish') }}"> @lang('Spanish classes')</a></div>
                     @lang('Want to know what day/time the classes are held')
                  </div>
                  <div class="clr"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/tes.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="{{ route('adult_classes') }}"> @lang('Mock / Revision Course / adult classes')</a></div>
                     @lang('Want to know more about extension classes')
                  </div>
                  <div class="clr"></div>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/serv.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="{{ route('our_services') }}"> @lang('Services')</a></div>
                    @lang('Our range of advisory services to build strategy for your success').
                  </div>
                 <div class="clr"></div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/blog.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="{{ route('blogs') }}">Blogs &amp; @lang('News')</a></div>
                    @lang('Watch out for news, blogs &amp; updates')
                  </div>
                 <div class="clr"></div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/conta.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="{{ route('enquiry_form') }}">@lang('Contact Us')</a></div>
                    @lang('We are generally over-subscribed. Contact us now').
                  </div>
                 <div class="clr"></div>
               </div>
            </div>
            </div>
         </div>
      </div>
@endsection