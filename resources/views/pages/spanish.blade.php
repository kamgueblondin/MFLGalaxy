@extends('layouts.app')
    @section("title") @lang('Spanish') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
     <!-- Page Heading/Breadcrumbs -->
     <h1 class="mt-2 mb-2">@lang('Spanish')
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Spanish')</li>
    </ol>
    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="{{asset('images/img/spanish.png')}}" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">@lang('Why Learn Spanish')</h3>
        <p>@lang('Being a phonetic language, Spanish is considered an easy language to learn, and after one Spanish class you will notice a significant improvement - so much so that most of our learners continue on to the next level to become enthusiastic Spanish speakers. Iif you\'re heading to a Spanish-speaking location on holiday or for business, our Spanish language courses are the perfect preparation. Our courses will give you the essential language skills you need, as well as the confidence to use them. Learn Spanish and you will be able to communicate with over 500 million speakers across the world. There is no better time than now to lear Spanish and take classes with MFL Galaxy.')</p>
        <h3 class="my-3"></h3>
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>

    </div>
    <!-- /.row -->
    <hr>



    <hr>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">@lang('Primary School')</h4>
          <div class="card-body">
            <p class="card-text">@lang('Learning one language is not enough').</p>
			<p>@lang('In today\'s world, speaking one foreign language is not enough. Students who speak several languages will increase their chances of finding a job, whether at home or abroad. Learning another language enriches the mind and opens up new horizons, both personal and professional').</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">@lang('Secondary and Universities')</h4>
          <div class="card-body">
            <p class="card-text">@lang('An advantage for studying in France').</p>
			<p>@lang('Speaking French opens up opportunities for higher education at some of France\'s best-known universities (the Sorbonne, Pierre Marie Curie University, etc.) or elites grandes écoles (HEC, Polytechnique, ESSEG), often on very favourable financial terms. Students with a good level of French may be eligible to apply for a French government grant to enrol on a postgraduate course of their choice in France, leading to an internationally recognised postgraduate degree').</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">@lang('Adult Classes')</h4>
          <div class="card-body">
            <p class="card-text">@lang('Visiting Paris and the rest of France').</p>
			<p>@lang('France is the workd\'s top tourist destination and attracts more than 79,5 million visitors a year. The ability to speak even a little French makes it so much more enjoyable to visit Paris and all the regions of France (from the mild climes of the Cote d\'Azur to the snow-capped peaks of the Alps via the rugged coastline of Brittany) and offers insights into French culture, mentality and way of life. French also comes in handy when travelling to Africa, Switzerland, Canada, Monaco, the Seychelles and other places').</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

@endsection
