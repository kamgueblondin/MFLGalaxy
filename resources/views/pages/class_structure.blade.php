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
          <h3 class="card-header bg-primary text-white">@lang('Basic')</h3>
          <div class="card-body">
            <div class="display-4" style="font-size:30px;">@lang('£10.00')</div>
            <div class="font-italic">@lang('per Session Weekday or Weekend Classes')</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">@lang('KS1 and KS2')</li>
            <li class="list-group-item">
              <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"class="btn btn-primary">@lang('Sign Up')!</button >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card card-outline-primary h-100">
          <h3 class="card-header bg-primary text-white">@lang('Advanced')</h3>
          <div class="card-body">
			<div class="display-4" style="font-size:25px;">@lang('£20.00 to £30.00')</div>
			<div class="font-italic">@lang('per Session Weekend classes')</div>			
          </div>
          <ul class="list-group list-group-flush">
			<li class="list-group-item">@lang('KS3, KS4 and KS5')</li>
            <li class="list-group-item">
              <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"class="btn btn-primary">@lang('Sign Up')!</button >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header bg-primary text-white">@lang('Adult/Leisure')</h3>
          <div class="card-body">
            <div class="display-4" style="font-size:30px;">@lang('£30.00')</div>
            <div class="font-italic">@lang('per Session Weekdays and Weekend Classes')</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"></li>
            <li class="list-group-item">
              <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"class="btn btn-primary">@lang('Sign Up')!</button >
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Modal of payement -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">@lang('Bank transfer information')</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<h3><strong font-size="26px;">@lang('Just send us a bank transfer and then contact us in case you are not contacted within 24 hours of your transfer.')</strong></h3>
      @lang('Name:') <strong>Bertrand Emo</strong><br>
      @lang('Bank:') <strong>Nationwide</strong><br>
      @lang('Sort code:') <strong>074456</strong> <br>
      @lang('Account number:') <strong>44578370</strong>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
		  </div>
		</div>
	  </div>
	</div>

@endsection
