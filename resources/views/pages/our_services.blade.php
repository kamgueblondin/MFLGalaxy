@extends('layouts.app')
    @section("title") @lang('Our Services') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Our Services')
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Our Services')</li>
    </ol>

     <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="{{ asset('images/image/service.jpg') }}" alt="our services">

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card h-100  box-3">
          <h4 class="card-header bg-white">@lang('Payments')</h4>
          <div class="card-body">
            <p class="card-text">@lang('Payment of course fees are only refundable should the course not run, in which case they will be refunded in full. In the rare occasion that the tutor has to cancel an individual class, such as for illness or adverse weather, the class will either be rescheduled or, if this is not possible, a partial refund will be issued.')</p>
            <p>@lang('Payments are possible by') <a target="blank"  href="https://www.paypal.com/">@lang('bank transfer')</a> @lang('or via') <a target="blank"  href="https://www.paypal.com/"> PayPal </a>.</p>
          </div>
          <div class="card-footer bg-white">
            
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100  box-3">
          <h4 class="card-header bg-white">@lang('Cancellation policy')</h4>
          <div class="card-body">
            <p class="card-text"> @lang('Lessons take a long time to prepare and will often be put together several days in advance. Therefore, if a client cancels with less than 24 hours notice, we reserve the right to charge a cancellation fee of 50% of the lesson price.') </p>
          </div>
          <div class="card-footer bg-white">
            
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100  box-3">
          <h4 class="card-header bg-white">@lang('Privacy policy')</h4>
          <div class="card-body">
            <p class="card-text">@lang('We will only hold contact details of clients to get in touch when necessary, such as a class cancellation.  We will never share any of your personal details with any third party.')</p>
          </div>
          <div class="card-footer bg-white">
            
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100  box-3">
          <h4 class="card-header bg-white">@lang('Booking')</h4>
          <div class="card-body">
            <p class="card-text">@lang('Prices for individual tuition range from £20-30 per hour depending upon level and other arrangements')</p>
            <p>@lang('Prices for family members or groups  range from £10-18 per person per hour depending on group size.')</p>
          </div>
          <div class="card-footer bg-white">
            
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
@endsection