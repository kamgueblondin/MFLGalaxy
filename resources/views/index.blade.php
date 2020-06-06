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
        <title>{{ config('app.name', 'MLFGalaxy') }}</title>
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
                  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4"><a href="#"> <img src="{{ asset('images/logo.png') }}" class="class-ace-logo" alt="MLFGalaxy" /></a>
                  </div>
                  <div class="col-xs-6 col-sm-12 col-md-4 col-lg-4">
                     <div class="header-text">
                        <h3>@lang('French and Spanish courses')</h3>
                        <span>@lang('MAXIMIZE YOUR LINGUISTIC POTENTIAL')</span>
                     </div>
                  </div>

                  <div class="hidden-xs col-md-5 col-lg-4 text-right">


                     <div class="txt-h-right ">
                        Click <span class="gray-clr"><a href="#">here</a></span> to submit enquiry<br/>
                        Please email us at <span class="gray-clr">contact@mlfgalaxy.com</span><br/>
                        Don't forget to put your phone number in the email<br/>
                        Leave voicemail at <span class="gray-clr">000 000 00000</span><br/>
                        8am-7pm; 7 days a week
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
                        <li class="sub-menu"><a href="#">Home</a><span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
                         <ul class="su-menu">
                                 <li><a href=#">About Us</a></li>

                                    <li><a href="#">Our Goals</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Blogs</a></li>
                                   <li><a href="#">Legal documents</a></li>
                                </ul>

                         </li>
						 <li class="sub-menu"><a href="#">My choice</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
                          <ul class="su-menu">
							<li><a href="#">French</a></li>
							<li><a href="#">Spanish</a></li>
						  </ul>
                         </li>
                        <li class="sub-menu"><a href="#">Classes</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
                          <ul class="su-menu">
                                    <li><a href="#">Photo Gallery</a></li>
                                    <li><a href="#">Class Structure</a></li>
                                    <li><a href="#">Extension Classes</a></li>
									<li><a href="#">Adult Classes</a></li>
                                    <li><a href="#">Target Schools</a></li>
                                    <li><a href="#">Useful Links</a></li>
									<li><a href="">FAQ</a></li>
                                </ul>
                         </li>

                         <li class="sub-menu"><a href="javascript:void(0);">Contact Us</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
                          <ul class="su-menu">
                              <li><a href="#">Enquiry Form</a></li>
                              <li><a href="#">More Infos</a></li>
                          </ul>
                         </li>
						 <li class="sub-menu">
                            <a href="javascript:void(0);">
                            @if(app()->getLocale() == 'fr')
                                Français
                            @elseif(app()->getLocale() == 'es')
                                Español
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
      <!-- Menu End Here -->


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
                  <h2>Online Course</h2>
                  <p>Good news !!! We provide customized tuition via online sessions. It doesn't matter where you live as long as you have a laptop/ipad, broadband connection and a headphone.

We teach using the proven framework & methodologies that has enabled our large number of students to get selected into the top grammar schools (QE Boys, Wilson, Olave's, Tiffin etc.) and independent schools (Eton, Westminster, City of London Boys, Sevenoaks, King's College). We specialise in both GL and CEM format. <br/> <br/>
                 <!-- <p class="text-center"><a href="#" class="btn-more"> Read More</a></p></p> -->
               </div>
            </div>

       <!--      <div class="item">
               <img src="#" alt="slider" />
               <div class="carousel-caption">
                  <h2>Heading Here2</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry  Lorem Ipsum has been the industry's  Lorem Ipsum is simply dummy text of the printing and typesetting industry  Lorem Ipsum has been the industry's </p>
               </div>
            </div> -->
                         <div class="item">
               <img src="{{asset('uploads/banners/1441.jpg')}}" alt="slider" />
                <div class="carousel-caption">
                  <h2>RESULTS</h2>
                  <p>We have achieved wonderful success in 2019 exams. <br>
					*  QE/Wilson/St.Olave's:  45 Selections <br>
					Selections <br>
					* Newstead Wood : 51 Selections <br>
					* Kent : Over 100 Selections   <br>
					* Bexley : Over 100 Selections <br>
					<br>

Students received offers including scholarship from various top private schools - Sevenoaks (over 10), City of London Boys, Alleyn's, Habs Boys, King's College, Dulwich, Eton, Westminster etc. <br/> <br/>
                <!--  <p class="text-center"><a href="#" class="btn-more"> Read More</a></p></p> -->
               </div>
            </div>
            <div class="item">
               <img src="{{asset('uploads/banners/580.jpg')}}" alt="slider" />
                <div class="carousel-caption">
                  <h2>Online courses Experts</h2>
                  <p>As our classes are now conducted ONLINE, we can accommodate more students. Please drop an enquiry and we will contact you shortly.
Our Year 5 classes are customized for specific grammar and private schools. Most of our students are toppers from various state and private schools. We train them with the best strategy and material which is evident in our fabulous results. <br/> <br/>
                <!--  <p class="text-center"><a href="#" class="btn-more"> Read More</a></p></p> -->
               </div>
            </div>
                       <!--  <div class="item">
               <img src="#" alt="slider" />
            </div> -->
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

         <marquee behavior="scroll" direction="left" scrollamount="5" >**Due to the recent coronavirus pandemic,  we now offer ONLINE classes and students absolutely love it.        **2020 Results  **QE Boys topper 280/280 is our student.   **Students passed in Westminster, Eton and Tonbridge Boys.                    Congratulations to 5 students who passed 10 plus exam (CLSB, Whitgift, Trinity)             2019  EXAM RESULTS  - QE/WILSON/OLAVE - 45 SELECTIONS                   **  KENT (GL) - OVER 100 SELECTIONS         ** BEXLEY (CEM) - OVER 100 SELECTIONS       **NEWSTEAD - 51 SELECTIONS           </marquee>

      </div>


      </div>
      <div class="box-mains">
         <div class="container padding-bx">
            <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="box-3">
                 <h3>WHAT WE DO</h3>
                     <p class="inx-pgs">
 Good news!! We now provide online tuition and it is a big success with the existing students. It doesn&#39;t matter where you live in England, you can now join our online tuition as long as you have a laptop/ipad/pc, headphone and a broadband connection.  Over 95% tuition parents are delighted with the online classes. 
 We teach using the proven framework, tools & methodologies that has enabled our large number of students to get selected into the top grammar schools (GL, CEM, Super-selective) and independent schools with scholarship.
  

                          Our classes are only for Year 4 and Year 5 children. Click&nbsp;<a href="#">here</a> to know more about us.
                      </p>
                  </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="box-3">
                 <h3>OUR TARGET SCHOOLS</h3>
                  <p>We target the following schools for 11 Plus exams:  </p>
                      <ul>
                       <li>St. Olave's, Orpington</li>
                          <li>The Judd School, Tonbridge</li>
                          <li>Dartford Grammar, Dartford</li>
                          <li>Newstead Wood, Orpington</li>
                          <li>Tonbridge Grammar</li>
                          <li>Wilson's School, Wallington</li>
                          <li>QE Boys; Henrietta Barnet</li>
                          <li>Other Kent and Bexley schools</li>
                          <li>Private Schools (scholarships)</li>

                      </ul>
                  </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="box-3">
                 <h3>OUR RESULTS</h3>
                                   <!-- <p>Our results for Sep 2019 are: </p> -->
                  <p>Our latest results are: </p>
                      <ul>
						 <li>QE/Olave/Wilson: 45 selections</li>
						  <li>Kent: 100 selections</li>
						  <li>Bexley: 100 selections</li>
						  <li>Newstead Wood 2019: 51 selections</li>
						  <li>Independent (11 Plus): 25 selections</li>
						  <li>Independent (10 Plus): 5 selections</li>

                      </ul>
                     <p>Click<a href="#"> here</a> for detailed results</p>
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
                            <div class="news-sections">Latest News</div>
                            <ul class="list-aggregate" id="marquee-vertical" >
									<li>
										 To enquire, please complete the Additional Information Form (under Contact Us).  It is NOT the Contact Us form.

									 </li>
									 <li>
										 COVID-19 Update: Due to the recent coronavirus pandemic, we have started online classes and have received wonderful feedback from the existing tuition students. See class schedule for timings.
									 </li>
									 <li>
										 Good news !! We have spaces as all classes are now conducted ONLINE.

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
                     <div class="heading-box1"><a  style="text-decoration:none;" href="#">Why MLFGalaxy?</a>	</div>
                     Want to get success in exam and know more about our tuition?
                  </div>
                  <div class="clr"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box2.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"> <a style="text-decoration:none;" href="#">Our Goal</a></div>
                    See our stupendous success in exams.
                  </div>
                 <div class="clr"></div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box3.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"> <a style="text-decoration:none;" href="#"> Testimonials</a></div>
                     See what parents say about us.
                  </div>
                  <div class="clr"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="#">	French classes</a></div>
                     Want to know what we cover in the classes
                  </div>
                  <div class="clr"></div>
                   </div>
               </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box2.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"> <a style="text-decoration:none;" href="#"> Spanish classes</a></div>
                     Want to know what day/time the classes are held
                  </div>
                  <div class="clr"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box3.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="#"> Mock / Revision Course / adult classes</a></div>
                     Want to know more about extension classes
                  </div>
                  <div class="clr"></div>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="#"> Services</a></div>
                    Our range of advisory services to build strategy for your success.
                  </div>
                 <div class="clr"></div>
               </div>
            </div>

               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box2.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="#">Blogs &amp; News</a></div>
                    Watch out for news, blogs &amp; updates
                  </div>
                 <div class="clr"></div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="box-white">
                  <div class="img-boxx"><img src="{{asset('images/img-box3.png')}}" alt="" /></div>
                  <div class="tex-boxx">
                     <div class="heading-box1"><a style="text-decoration:none;" href="#">Contact Us</a></div>
                    We are generally over-subscribed. Contact us now.
                  </div>
                 <div class="clr"></div>
               </div>
            </div>

            </div>



         </div>







      </div>
      <!-- body cont End -->

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
                     <div class="copy-pading">Copyright &copy; 2020 <a href="{{ route('login') }}" title="@lang('Login')">MLFGalaxy</a> Right Reserved. </div>
                 </div>
                 <div class="col-md-3">
                       <div class="cont-footer">
                     <ul>
                        <li>Follow us</li>
                        <li> <a target="blank"  href="#"> <i class="fa fa-facebook"></i></a></li>
                        <li> <a target="blank"  href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a  target="blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li> <a target="blank"  href="#"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                  </div>
                 </div>
                 <div class="col-md-5">
                      <div class="developed-right-txt">Website Developed by <a href="#" target="_blank"></a></div>
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
