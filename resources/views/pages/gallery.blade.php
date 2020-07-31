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
    <!-- Project One -->
    <div class="row">  
      @foreach ($galeriesObjects as $galeriesObject)
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a {{ asset('/images/galerie/'.$galeriesObject->image) }}>
              <img class="card-img-top"src="{{ asset('/images/galerie/'.$galeriesObject->image) }}" height="500px" alt="{{$galeriesObject->title_frensh}}">
            </a>
          </div>
        </div>
      <!-- /.row -->
      @endforeach 
    </div>
    <!-- Pagination -->
    <hr>
    <!-- end operation -->
    <div class="pagination justify-content-center mb-4">
        {!! $galeriesObjects->render() !!}
    </div>
@endsection
