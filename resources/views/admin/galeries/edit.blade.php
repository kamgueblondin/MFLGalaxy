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
								<h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Galeries' }}</h4>
							</div>
							<div class="btn-group btn-group-sm pull-right" role="group">

								<a href="{{ route('galeries.galeries.index') }}" class="btn btn-primary" title="Show All Galeries">
									<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
								</a>

								<a href="{{ route('galeries.galeries.create') }}" class="btn btn-success" title="Create New Galeries">
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

							<form method="POST" action="{{ route('galeries.galeries.update', $galeries->id) }}" id="edit_galeries_form" name="edit_galeries_form"  enctype="multipart/form-data" accept-charset="UTF-8" class="form-horizontal">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PUT">
							@include ('admin.galeries.form', [
														'galeries' => $galeries,
													  ])

								<div class="form-group">
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
