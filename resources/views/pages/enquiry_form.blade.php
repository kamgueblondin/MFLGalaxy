@extends('layouts.app')
    @section("title") @lang('Enquiry Form') | {{ config('app.name', 'MFLGalaxy') }} @endsection
@section('content')
    <!-- Page Heading/Breadcrumbs -->  
    <h1 class="mt-2 mb-2">@lang('Enquiry Form')
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}">@lang('Home')</a>
      </li>
      <li class="breadcrumb-item active">@lang('Enquiry Form')</li>
    </ol>
    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        @if(Session::has('success_message'))
          <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
        @endif
        <p>
           
          <br>
          <br>
        </p>
        <p>
          <abbr title="Phone">@lang('Phone')</abbr>: 00 442 085 938 136
        </p>
        <p>
          <abbr title="Email">Email</abbr>:
          <a href="mailto:Mfl_galaxy2020@yahoo.com">Mfl_galaxy2020@yahoo.com</a>
        </p>
      
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">  

         </div>
      </div> 
        <h3>@lang('Enquiry Form')</h3>
        <form method="post" action="{{route('enquiry_form')}}" name="sentMessage container-fluid" id="contactForm" novalidate>
          @csrf
        <br/> <div class="control-group form-group">
            <div class="controls">
              <div class="row"> 
                <div class="col-2"> 
                  <label>@lang('Student Name'):</label>
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                </div>
              </div> 
                  <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <div class="row"> 
                <div class="col-2">
                  <label>@lang('Parent Name'):</label>
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="parent" name="parent" required data-validation-required-message="Please enter your name.">
                  <br/>
                  <ul>
                    <div class="control-group form-group">
                    <div class="controls">
                      <div class="row"> 
                        <div class="col-2"> 
                  
                    <li><label>@lang('Phone Contact'):</label></li>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="number" name="number" required data-validation-required-message="Please enter your name.">
                  </div>
                </div> 
                <p class="help-block"></p>
              </div>
            </div> 
            <div class="control-group form-group">
              <div class="controls">
                <div class="row"> 
                  <div class="col-2">
                    <li><label>@lang('Email Contact'):</label></li>
                    </div>
                  <div class="col">

                  <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
                  @if ($errors->has('email'))
                      <div class="invalid-feedback">
                          {{ $errors->first('email') }}
                      </div>
                  @endif
                </div> 
                <p class="help-block"></p>
              </div>
            </div> 
          </div>
                  </ul>
                </div>
              </div> 
                  <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <div class="row">
              <label>@lang('Student Information'):</label>
            </div>
            <div class="row">
              <div class="col-1">
                <label>@lang('Age'):</label>
              </div> 
              <div class="col-1">
                <input type="text" class="form-control" id="age" name="age" required data-validation-required-message="Please enter your age.">
              </div> 

                <div class="col-1">
                <label>@lang('Grade'):</label>
            </div>
            <div class="col-2">
              <input type="text" class="form-control" id="grade" name="grade" required data-validation-required-message="Please enter your grade.">
            </div>
            <div class="col-1">
              <label>@lang('Gender'):</label>
          </div>
          <div class="col-2">
            M <input type="radio" name="gender" value="Male"> 
            F <input type="radio" name="gender" value="Female">
          </div>
          </div>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <div class="row"> 
            <div class="col-3.5">
              <label>@lang('Primary Course/Subject Needed'):</label>
            </div>
            <div class="col">
              <input type="text" class="form-control" id="primary_course" name="primary_course" required data-validation-required-message="">
            </div>
          </div> 
              <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <div class="row"> 
            <div class="col-4">
              <label>@lang('Additional Course/Subject(If Needed)'):</label>
            </div>
            <div class="col">
              <input type="text" class="form-control" id="additional_course" name="additional_course" required data-validation-required-message="">
            </div>
          </div> 
              <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <div class="row"> 
            <div class="col-3">
              <label>@lang('Please choice of level'):</label>
            </div>
            <div class="col">
             KS2 <input type="radio" name="choice">
             KS3 <input type="radio" name="choice">
             KS4 <input type="radio" name="choice">
             KS5 <input type="radio" name="choice">
             ADULTS <input type="radio" name="choice">
            </div>
          </div> 
              <p class="help-block"></p>
        </div>
      </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>@lang('Additional Notes'):</label>
              <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">@lang('Send')</button>
        </form>
      </div>

    </div>
    <!-- /.row -->
@endsection
