@extends('layouts.app')
    @section("title") @lang('German') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
     <!-- Page Heading/Breadcrumbs -->
     <h1 class="mt-2 mb-2">@lang('German')
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('German')</li>
    </ol>
    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-6">
        <img class="img-fluid" src="{{ asset('images/img/berlin.jpg') }}" alt="German">
      </div>

      <div class="col-md-6">
        <h3 class="my-3"></h3>
        <p>@lang('First and foremost, learning French is the pleasure of learning a beautiful, rich, melodious language that is often called the language of love. French is also an analytical language that structures thought and develops critical thinking, which is a valuable skill for discussions and negociations').</p>
		<p>@lang('French is, along with English, the only language spoken on all five continents. More than 220 million people speak French on all the five continents. French is a major language of international communication. It is the second most widely learned language after English and the sixth most widely spoken language in the world. French is also the second most widely taught language after English, and is taught on every continent. The OIF, an international organisation of French-speaking countries, is made up of 77 member States and governments. France also operates the biggest international network of cultural institutes, which run French-language course for close on a million learners').</p>
	  </div>

    </div>
    <!-- /.row -->
    <hr>



    <hr>

    <!-- Marketing Icons Section -->
    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">@lang('Primary School')</a>
            </h5>
          </div>
  
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                <p class="card-text">@lang('Learning one language is not enough').</p>
                <p>@lang('In today\'s world, speaking one foreign language is not enough. Students who speak several languages will increase their chances of finding a job, whether at home or abroad. Learning another language enriches the mind and opens up new horizons, both personal and professional').</p>          
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">@lang('Secondary and Universities')
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
                <p class="card-text">@lang('An advantage for studying in France').</p>
                <p>@lang('Speaking French opens up opportunities for higher education at some of France\'s best-known universities (the Sorbonne, Pierre Marie Curie University, etc.) or elites grandes écoles (HEC, Polytechnique, ESSEG), often on very favourable financial terms. Students with a good level of French may be eligible to apply for a French government grant to enrol on a postgraduate course of their choice in France, leading to an internationally recognised postgraduate degree').</p>          
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">@lang('Adult Classes')</a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
                <p class="card-text">@lang('Visiting Paris and the rest of France').</p>
                <p>@lang('France is the workd\'s top tourist destination and attracts more than 79,5 million visitors a year. The ability to speak even a little French makes it so much more enjoyable to visit Paris and all the regions of France (from the mild climes of the Cote d\'Azur to the snow-capped peaks of the Alps via the rugged coastline of Brittany) and offers insights into French culture, mentality and way of life. French also comes in handy when travelling to Africa, Switzerland, Canada, Monaco, the Seychelles and other places').</p>          
            </div>
          </div>
        </div>
      </div>

@endsection
