@extends('layouts.app')
    @section("title") @lang('Gallery') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Gallery')
     
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Gallery')</li>
    </ol>
    @if(config('app.locale') == 'fr')
    @foreach ($galeriesObjects as $galeriesObject)
    <!-- Project One -->
    <div class="row">
      <div class="col-md-none">
        <a href="{{ asset('/images/galerie/'.$galeriesObject->image) }}">
          <img class="img-fluid rounded" src="{{ asset('/images/galerie/'.$galeriesObject->image) }}" alt="{{$galeriesObject->title_frensh}}">
        </a>
      </div>

    </div>
    <!-- /.row -->

    <hr>
    @endforeach
    @elseif(config('app.locale') == 'en') 
    @foreach ($galeriesObjects as $galeriesObject)
    <!-- Project One -->
    <div class="row">
      <div class="col-md-none">
        <a href="{{ asset('/images/galerie/'.$galeriesObject->image) }}">
            <img class="img-fluid rounded" src="{{ asset('/images/galerie/'.$galeriesObject->image) }}" alt="{{$galeriesObject->title_frensh}}">
        </a>
      </div>

    </div>
    <!-- /.row -->

    <hr>
    @endforeach
    @elseif(config('app.locale') == 'de')  
    @foreach ($galeriesObjects as $galeriesObject)
    <!-- Project One -->
    <div class="row">
      <div class="col-md-none">
        <a href="{{ asset('/images/galerie/'.$galeriesObject->image) }}">
            <img class="img-fluid rounded" src="{{ asset('/images/galerie/'.$galeriesObject->image) }}" alt="{{$galeriesObject->title_frensh}}">
        </a>
      </div>

    </div>
    <!-- /.row -->
    @endforeach 
    @else 
    @foreach ($galeriesObjects as $blogsObject)
    <!-- Project One -->
    <div class="row">
      <div class="col-md-none">
        <a href="{{ asset('/images/galerie/'.$galeriesObject->image) }}">
            <img class="img-fluid rounded" src="{{ asset('/images/galerie/'.$galeriesObject->image) }}" alt="{{$galeriesObject->title_frensh}}">
        </a>
      </div>

    </div>
    <!-- /.row -->
    @endforeach
    @endif
    <!-- Pagination -->
    <!-- end operation -->
    <div class="pagination justify-content-center mb-4">
        {!! $galeriesObjects->render() !!}
    </div>
@endsection
