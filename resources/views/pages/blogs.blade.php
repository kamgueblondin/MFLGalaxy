@extends('layouts.app')
    @section("title") @lang('Blogs') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Blogs')
  
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Blogs')</li>
    </ol>
    @if(config('app.locale') == 'fr')
    @foreach ($blogsObjects as $blogsObject)
    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="{{ asset('/images/blog/'.$blogsObject->image) }}" alt="{{$blogsObject->title_frensh}}">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">{{$blogsObject->title_frensh}} </h2>
            <p class="card-text">{{$blogsObject->content_frensh}} </p>
            <a href="{{url('/')}}" class="btn btn-primary">@lang('home') &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        @lang('Posted on') {{ $blogsObject->created_at }} @lang('by')
        @if(@isset( $blogsObject->user->name))
        <a href="#">{{ $blogsObject->user->name }}</a>
        @endisset
      </div>
    </div>
    @endforeach
    @elseif(config('app.locale') == 'en') 
    @foreach ($blogsObjects as $blogsObject)
    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="{{ asset('/images/blog/'.$blogsObject->image) }}" alt="{{$blogsObject->title_frensh}}">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">{{$blogsObject->title_english}} </h2>
            <p class="card-text">{{$blogsObject->content_english}} </p>
            <a href="{{url('/')}}" class="btn btn-primary">@lang('home') &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        @lang('Posted on') {{ $blogsObject->created_at }} @lang('by')
        @if(@isset( $blogsObject->user->name))
        <a href="#">{{ $blogsObject->user->name }}</a>
        @endisset
      </div>
    </div>
    @endforeach
    @elseif(config('app.locale') == 'de')  
    @foreach ($blogsObjects as $blogsObject)
    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="{{ asset('/images/blog/'.$blogsObject->image) }}" alt="{{$blogsObject->title_frensh}}">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">{{$blogsObject->title_deush}} </h2>
            <p class="card-text">{{$blogsObject->content_deush}} </p>
            <a href="{{url('/')}}" class="btn btn-primary">@lang('home') &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        @lang('Posted on') {{ $blogsObject->created_at }} @lang('by')
        <a href="#">{{ $blogsObject->user->name }}</a>
      </div>
    </div>
    @endforeach 
    @else 
    @foreach ($blogsObjects as $blogsObject)
    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="{{ asset('/images/blog/'.$blogsObject->image) }}" alt="{{$blogsObject->title_frensh}}">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title">{{$blogsObject->title_spanish}} </h2>
            <p class="card-text">{{$blogsObject->content_spanish}} </p>
            <a href="{{url('/')}}" class="btn btn-primary">@lang('home') &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        @lang('Posted on') {{ $blogsObject->created_at }} @lang('by')
        <a href="#">{{ $blogsObject->user->name }}</a>
      </div>
    </div>
    @endforeach
    @endif

    <!-- Pagination -->
    <!-- end operation -->
    <div class="pagination justify-content-center mb-4">
        {!! $blogsObjects->render() !!}
    </div>

  </div>
@endsection