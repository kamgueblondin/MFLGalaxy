@extends('layouts.app')
    @section("title") @lang('About Us') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('About Us')
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('About Us')</li>
    </ol>
    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img  class="img-fluid rounded mb-4" src="{{ asset('images/img/about.jpg') }}" alt="About us">
      </div>
      <div class="col-lg-6">
        <h2>@lang('About Us')</h2>
        <p>@lang('Would you like to learn French, German, or Spanish? Or maybe your child is studying one of these languages at school and needs a bit of extra support? Finding the right languages tutor can seem like a bit of a mine field.  Here at MFL Galaxy,  all tuition and classes are delivered by  fully qualified languages teachers. They  also teach in secondary schools so they are fully aware of the requirements for KS2, KS3, KS4 and GCSE.') </p>
        <p>@lang('Whether you are a complete beginner or have some previous knowledge,  individual tuition is ideal if you want to have a bespoke language learning experience.  Whether you wish to learn a bit of \'holiday language\' or something more serious, it is suitable for all ages from school pupils to adult learners and is extremely useful for preparing for the GCSE exam').</p>
        <p>@lang('We offer tuition for French to A level, German and Spanish to GCSE. English as a foreign language is also available.  Tuition can take place even in your own home, subject to availability. (Please note there will be a supplement for longer travelling distances.)') </p>
        <p>@lang('Please get in touch and we can discuss your needs as a learner and tailor a programme to suit you as an individual rather than following the group.')</p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2>@lang('Our Team')</h2>

    <div class="row">
      <div class="col-lg-3 mb-3">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="{{ asset('images/image/IMG-20200706-WA0033.jpg') }}" alt="team">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">MD, @lang('Teacher French')</h6>
            <p class="card-text">KS2, KS3, KS4, KS5</p>
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-3">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="{{ asset('images/image/IMG-20200706-WA0033.jpg') }}" alt="team">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">@lang('Secretary')</h6>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-3">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="{{ asset('images/image/IMG-20200706-WA0033.jpg') }}" alt="team">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">@lang('Teacher Spanish')</h6>
            <p class="card-text">KS3, KS4, KS5</p>
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-3">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="{{ asset('images/image/IMG-20200706-WA0033.jpg') }}" alt="team">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">@lang('Teacher German')</h6>
            <p class="card-text">KS3, KS4, KS5</p>
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Our test -->
    <div class="row">
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="{{ asset('images/img/custumers.jpg') }}" alt="custumers">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="{{ asset('images/img/custumers.jpg') }}" alt="custumers">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="{{ asset('images/img/custumers.jpg') }}" alt="custumers">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="{{ asset('images/img/custumers.jpg') }}" alt="custumers">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="{{ asset('images/img/custumers.jpg') }}" alt="custumers">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="{{ asset('images/img/custumers.jpg') }}" alt="custumers">
      </div>
    </div>
    <!-- /.row -->
@endsection
