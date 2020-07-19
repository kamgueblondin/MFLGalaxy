@extends('layouts.app')
    @section("title") @lang('Testimonials') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Testimonials')
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Testimonials')</li>
    </ol>
    <div class="row">

        @if(config('app.locale') == 'fr')
        @foreach ($temoignagesObjects as $temoignagesObject)
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="img-fluid rounded" src="{{ asset('/images/temoignage/'.$temoignagesObject->image) }}" alt="{{$temoignagesObject->title_frensh}}"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$temoignagesObject->name}}</a>
              </h4>
              <p class="card-text">{{$temoignagesObject->content_frensh}}.</p>
            </div>
          </div>
        </div>
        @endforeach
        @elseif(config('app.locale') == 'en') 
        @foreach ($temoignagesObjects as $temoignagesObject)
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="img-fluid rounded" src="{{ asset('/images/temoignage/'.$temoignagesObject->image) }}" alt="{{$temoignagesObject->content_deush}}"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$temoignagesObject->name}}</a>
              </h4>
              <p class="card-text">{{$temoignagesObject->content_english}}.</p>
            </div>
          </div>
        </div>
        @endforeach
        @elseif(config('app.locale') == 'de')  
        @foreach ($temoignagesObjects as $temoignagesObject)
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="img-fluid rounded" src="{{ asset('/images/temoignage/'.$temoignagesObject->image) }}" alt="{{$temoignagesObject->content_deush}}"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$temoignagesObject->name}}</a>
              </h4>
              <p class="card-text">{{$temoignagesObject->content_deush}}.</p>
            </div>
          </div>
        </div>
        @endforeach
        @else 
        @foreach ($temoignagesObjects as $temoignagesObject)
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="img-fluid rounded" src="{{ asset('/images/temoignage/'.$temoignagesObject->image) }}" alt="{{$temoignagesObject->content_spanish}}"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$temoignagesObject->name}}</a>
              </h4>
              <p class="card-text">{{$temoignagesObject->content_spanish}}.</p>
            </div>
          </div>
        </div>
        @endforeach
        @endif
        <!-- Pagination -->
        <!-- end operation -->
        <div class="pagination justify-content-center mb-4">
            {!! $temoignagesObjects->render() !!}
        </div>
@endsection
