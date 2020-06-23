@extends('layouts.app')
    @section("title") @lang('Our Goals') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-2 mb-2">@lang('Our Goals')
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Our Goals')</li>
    </ol>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr>

    <!-- Date/Time -->
    <p>Posted on June 23, 2020 at 12:00 AM</p>

    <hr>

    <!-- Post Content -->
    <p class="lead">If your time is short or you would prefer a relaxed way of learning without the need to travel, then maybe online language tuition may suit you?  The advantages of this are that you still get one to one support from your tutor, but you can do so from the comfort of your own home, office or even somewhere else.  Lessons can also be provided at different lengths to suit you.</p>

    <p>MFL Galaxy  can offer tuition via Skype or ZOOM  in French, German, or Spanish,.  All carried out by an experienced and fully qualified teacher.  The beauty of this is that we can still be of service to you regardless of whether you live in the UK or abroad. </p>

    <p>Payment for online tuition can be made via the PayPal or via bank transfer. </p>

    <blockquote class="blockquote">
        <footer class="blockquote-footer">Someone famous in
        <cite title="Source Title">Source Title</cite>
        </footer>
    </blockquote>


    <hr>


    </div>
@endsection