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

      <div class="col-md-6">
        <img class="img-fluid" src="{{asset('images/img/spanish.jpg')}}" alt="spanish">
      </div>

      <div class="col-md-6">
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

    <div class="mb-4 mb-1" id="accordion" role="tablist" aria-multiselectable="true">
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
                <div class="card-body">           
                <p class="card-text">@lang('Are you career-oriented? Would you like to get a better job or have several employers throw offers and counteroffers in a scramble to hire you? Then start learning Spanish now!')</p>
                <p>@lang('It does not matter if you want to stay in America or you plan on finding a job abroad—the fact remains that with the number of Spanish speakers growing, sooner or later you will have to attend to a patient who only speaks Spanish or help a South American client get their taxes sorted').</p>
                <p>@lang('If you are a translator or an interpreter, mastering Spanish can open a whole new world of documents that need to be translated and people who will hire you to interpret for them while at a meeting or an interview').</p>
                <p>@lang('Learning Spanish will add that final touch to your resume that will make you stand out among the rest of candidates who are applying for that job you so want to get').</p>
                <p>@lang('However, if you do not want to change your career or leave your job, Spanish is also a great asset that can help you get promoted at your current place of employment!')</p>
                <p>@lang('Maybe your bosses want their managers to speak three languages fluently. Maybe the company is opening a new branch office in Venezuela and they are looking for an American with fluent Spanish to be their international director. Or maybe your employers are like many others who value foreign language skills in their employees').</p>
                </div>
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
                <p class="card-text">@lang('We all enjoy preparing our next trip and going on vacation to beautiful destinations, but a lot of us limit ourselves by choosing countries where they speak our language').</p>
                <p>@lang('If you start learning Spanish now, you will be able to choose from 20+ more countries!')</p>
                <p>@lang('You will leave behind all the stress and anxiety related to not knowing how to get from one place to another, how to order food at a restaurant or how to visit the hidden places only those who know the local language can find').</p>
                <p>@lang('If you speak Spanish, you can interact with the people of the place you are visiting, ask for directions without having to carry a dictionary with you, mingle and have fun at local bars and parties… Plus, your trip can be the perfect way to get really immersed in the language and culture of the country!')</p>
                <p>@lang('A vacation gone wrong makes us not want to return to that place. Start learning Spanish so that all your holidays are').</p>
                <p>@lang('There are over 20 countries where Spanish is an official or national language. That means there are over 20 different kinds of traditional foods, customs and cultures!')</p>
                <p>@lang('One of the best things about traveling abroad is being able to savor regional and local food. Once you know how to speak Spanish and you decide to go to your next destination, you can go to a local bar or restaurant and ask the waiter to make some food suggestions. Or you can visit an ethnic food spot in your home country and know how to ask for down-home style cuisine!')</p>
                <p>@lang('There are so many different types of food, even inside the same country, that you would need five lifetimes to try them all').</p>
                <p>@lang('The same happens with the local people and their culture. Each of the countries where Spanish is spoken has its own history, traditions and way of living. People from Nicaragua, for instance, are distinctly different from people Spaniards. Even within these countries, there can be several kinds of traditions, folklore and dialects!')</p>
                <p>@lang('The importance of the Spanish language is undeniable. Spanish is the official language of 21 countries and is spoken by over 420,000,000 native speakers. The figure grows to 530,000,000 speakers world-wide when people who speak it as a second language are also taken into account').</p>
                <p>@lang('The Spanish language is becoming increasingly globalised and is regarded as the most commonly understood language in the western hemisphere, due to its prominent use in South America').</p>
                <p>@lang('Because Latin American countries are only surrounded by Spanish and Portuguese speaking countries, it means that English isn’t widely spoken; making the knowledge of Spanish a necessity for countries who want to trade').</p>
                <p>@lang('Growing Spanish-speaking consumer base').</p>
                <p>@lang('530 million Spanish speakers from around the world make up a group of consumers that no company can afford to ignore, which is why Spanish speakers are increasingly being considered by companies when promoting their products. They also form a huge community that shares products, services and culture, offering many international businesses huge growth potential').</p>
                <p>@lang('For many years, English has been (and continues to be) a language that is fundamental, internationally. However, taking into account the increasing population and economic success in Spanish speaking countries, it could be argued that Spanish is also becoming a compulsory second language for business').</p>          
          </div>
          </div>
        </div>
      </div>

@endsection
