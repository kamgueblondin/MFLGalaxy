@extends('layouts.app')
    @section("title") @lang('Our Goals') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Our Goals')
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Our Goals')</li>
    </ol>
	<div class="row">

      <div class="col-md-6">
        <img class="img-fluid" src="{{ asset('images/img/gold.jpg') }}" alt="our gold">
      </div>

      <div class="col-md-6">
        <h3 class="my-3">@lang('Our Goals')</h3> 
		<p class="lead">@lang('If your time is short or you would prefer a relaxed way of learning without the need to travel, then maybe online language tuition may suit you?  The advantages of this are that you still get one to one support from your tutor, but you can do so from the comfort of your own home, office or even somewhere else.  Lessons can also be provided at different lengths to suit you.')</p>

      </div>

    </div>
    <!-- /.row -->
	<hr>
    <p>@lang('MFL Galaxy  can offer tuition via Skype or ZOOM  in French, German, or Spanish,.  All carried out by an experienced and fully qualified teacher.  The beauty of this is that we can still be of service to you regardless of whether you live in the UK or abroad.') </p>

    <p>@lang('Payment for online tuition can be made via the PayPal or via bank transfer.') </p>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="{{ asset('images/img/custumers.jpg') }}" alt="custumers">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="{{ asset('images/img/custumers_sp.jpg') }}" alt="custumers">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="{{ asset('images/img/custumers_s.jpg') }}" alt="custumers">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="{{ asset('images/img/téléchargement.jpg') }}" alt="custumers">
        </a>
      </div>

    </div>
    <!-- /.row -->

   
    </div>
@endsection