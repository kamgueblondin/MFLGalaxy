@extends('layouts.app')
    @section("title") @lang('Class Structure') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Class Structure')
    
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Class Structure')</li>
    </ol>
    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header bg-primary text-white">Basic</h3>
          <div class="card-body">
            <div class="display-4">£10.00</div>
            <div class="font-italic">per Session Weekday or Weekend Classes</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">KS1 and KS2</li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card card-outline-primary h-100">
          <h3 class="card-header bg-primary text-white">Advanced</h3>
          <div class="card-body">
			<div class="display-4">£20.00 to £30.00</div>
			<div class="font-italic">per Session Weekend classes</div>			
          </div>
          <ul class="list-group list-group-flush">
			<li class="list-group-item">JS3, KS4 and KS5</li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header bg-primary text-white">Adult/Leisure</h3>
          <div class="card-body">
            <div class="display-4">£30.00</div>
            <div class="font-italic">per Session Weekdays and Weekend Classes</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"></li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.row -->

@endsection
