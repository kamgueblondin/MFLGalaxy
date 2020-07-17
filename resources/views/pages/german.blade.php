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
        <p>@lang('German is the most widely spoken language in Europe.  More people speak German as their native language than any other language in Europe... While learning German can connect you to 120 million native speakers around the globe, remember that many people also learn German as a second language').</p>
    <p>@lang('When you learn the German language, you get acquainted with the culture of the country it is spoken in, and you start loving it. Learning a new language will enable you to get in touch with its historical roots and enhance your personality and knowledge. German has the biggest number of resident speakers in the European Union; it is far more than English, French, or Spanish').</p>
    <p>• @lang('The German language is amongst the ten most normally spoken languages across the globe').</p>
    <p>• @lang('Germans are global leaders in Engineering').</p>
    <p>• @lang('18% of the world\’s books are published in German, and few of these hardly appear in English translation').</p> 
    <p>• @lang('German is the gateway to a higher education').</p>
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
                <p class="card-text">@lang('An advantage for studying in Germany').</p>
                <p>@lang('').</p>          
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
                <p class="card-text">@lang('Most of the people speak German as their national language other than any other language in Europe. It is an official tongue of Austria, Switzerland, and Luxembourg. The German language can connect you to more than 100 million native speakers around the world. It is the third most widely spoken language after English.').</p>
                <p>@lang('When you know their native language, you gain more when you visit the country. You can well converse in their language and know and understand the people rather than just communicate in English with your tour guide. The Austrians, Germans, and Swiss are recognizable for their interest and love of foreign travel. It adds the opportunity for people who are in a job of a tourism industry').</p>
              </div>
          </div>
        </div>
      </div>

@endsection
