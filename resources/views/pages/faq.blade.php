@extends('layouts.app')
    @section("title") @lang('FAQ') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('FAQ')
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('FAQ')</li>
    </ol>

    <br>
    <h1 style="font-size:18px;">@lang('frequently asked questions') :</h1>
    <br>
    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        @if(config('app.locale') == 'fr')
          @foreach ($faqAidesObjects as $faq)
          <div class="card">
              <div class="card-header" role="tab" id="heading{{$faq->id}}">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">{{$faq->message_fr}}</a>
                </h5>
              </div>
      
              <div id="collapse{{$faq->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$faq->id}}">
                <div class="card-body">
                    {{$faq->message_fr}}
                </div>
              </div>
            </div>
          @endforeach
        @elseif(config('app.locale') == 'en') 
        @foreach ($faqAidesObjects as $faq)
        <div class="card">
            <div class="card-header" role="tab" id="heading{{$faq->id}}">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">{{$faq->message_en}}</a>
              </h5>
            </div>
    
            <div id="collapse{{$faq->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$faq->id}}">
              <div class="card-body">
                  {{$faq->message_en}}
              </div>
            </div>
          </div>
        @endforeach
        @elseif(config('app.locale') == 'de')  
        @foreach ($faqAidesObjects as $faq)
        <div class="card">
            <div class="card-header" role="tab" id="heading{{$faq->id}}">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">{{$faq->message_de}}</a>
              </h5>
            </div>
    
            <div id="collapse{{$faq->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$faq->id}}">
              <div class="card-body">
                  {{$faq->message_de}}
              </div>
            </div>
          </div>
        @endforeach
        @else 
        @foreach ($faqAidesObjects as $faq)
        <div class="card">
            <div class="card-header" role="tab" id="heading{{$faq->id}}">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">{{$faq->message_es}}</a>
              </h5>
            </div>
    
            <div id="collapse{{$faq->id}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$faq->id}}">
              <div class="card-body">
                  {{$faq->message_es}}
              </div>
            </div>
          </div>
        @endforeach
        @endif
      </div>
      <!-- end operation -->
      <div class="pagination justify-content-center">
          {!! $faqAidesObjects->render() !!}
        </div>
@endsection
