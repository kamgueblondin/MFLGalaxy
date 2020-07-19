@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-default">
  
                        <div class="panel-heading clearfix">
                
                            <div class="pull-left">
                                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Information' }}</h4>
                            </div>
                            <div class="btn-group btn-group-sm pull-right" role="group">
                
                                <a href="#" class="btn btn-primary" title="Show All Information">
                                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                                </a>
                
                                <a href="#" class="btn btn-success" title="Create New Information">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </a>
                
                            </div>
                        </div>
                
                        <div class="panel-body">
                
                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                
                            <form method="POST" action="{{ route('information.update', $information->id) }}" id="edit_information_form" name="edit_information_form" accept-charset="UTF-8" class="form-horizontal">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PUT">
                                
                            <div class="form-group row {{ $errors->has('en') ? 'has-error' : '' }}">
                                <label for="en" class="col-md-2 control-label">En</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="en" type="text" id="en" value="{{ old('en', optional($information)->en) }}" maxlength="255" placeholder="Enter en here...">
                                    {!! $errors->first('en', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('fr') ? 'has-error' : '' }}">
                                <label for="fr" class="col-md-2 control-label">Fr</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="fr" type="text" id="fr" value="{{ old('fr', optional($information)->fr) }}" maxlength="255" placeholder="Enter fr here...">
                                    {!! $errors->first('fr', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('es') ? 'has-error' : '' }}">
                                <label for="es" class="col-md-2 control-label">Es</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="es" type="text" id="es" value="{{ old('es', optional($information)->es) }}" maxlength="255" placeholder="Enter es here...">
                                    {!! $errors->first('es', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('de') ? 'has-error' : '' }}">
                                <label for="de" class="col-md-2 control-label">De</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="de" type="text" id="de" value="{{ old('de', optional($information)->de) }}" maxlength="255" placeholder="Enter de here...">
                                    {!! $errors->first('de', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>


                
                                <div class="form-group row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input class="btn btn-primary" type="submit" value="Update">
                                    </div>
                                </div>
                            </form>
                
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
@stop
