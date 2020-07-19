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
							
							<span class="pull-left">
								<h4 class="mt-5 mb-5">Create New Galeries</h4>
							</span>

							<div class="btn-group btn-group-sm pull-right" role="group">
								<a href="{{ route('galeries.galeries.index') }}" class="btn btn-primary" title="Show All Galeries">
									<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
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

							<form method="POST" action="{{ route('galeries.galeries.store') }}" accept-charset="UTF-8" id="create_galeries_form" name="create_galeries_form"  enctype="multipart/form-data" class="form-horizontal">
							{{ csrf_field() }}
							@include ('admin.galeries.form', [
														'galeries' => null,
													  ])

								<div class="form-group">
									<div class="col-md-offset-2 col-md-10">
										<input class="btn btn-primary" type="submit" value="Add">
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



