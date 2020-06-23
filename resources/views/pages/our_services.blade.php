@extends('layouts.app')
    @section("title") @lang('Our Services') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Our Services')
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Our Services')</li>
    </ol>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Payments</h4>
          <div class="card-body">
            <p class="card-text">Payment of course fees are only refundable should the course not run, in which case they will be refunded in full. In the rare occasion that the tutor has to cancel an individual class, such as for illness or adverse weather, the class will either be rescheduled or, if this is not possible, a partial refund will be issued. </p>
            <p>Payments are possible by bank transfer or via PayPal.  See link below.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Cancellation policy</h4>
          <div class="card-body">
            <p class="card-text"> Lessons take a long time to prepare and will often be put together several days in advance. Therefore, if a client cancels with less than 24 hours notice, we reserve the right to charge a cancellation fee of 50% of the lesson price. </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Privacy policy</h4>
          <div class="card-body">
            <p class="card-text"> We will only hold contact details of clients to get in touch when necessary, such as a class cancellation.  We will never share any of your personal details with any third party.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
            <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Booking</h4>
          <div class="card-body">
            <p class="card-text"> Prices for individual tuition range from £20-30 per hour depending upon level and other arrangements</p>
            <p>Prices for family members or groups  range from £10-18 per person per hour depending on group size.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
@endsection