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
								<h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Temoignages' }}</h4>
							</div>
							<div class="btn-group btn-group-sm pull-right" role="group">

								<a href="{{ route('temoignages.temoignages.index') }}" class="btn btn-primary" title="Show All Temoignages">
									<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
								</a>

								<a href="{{ route('temoignages.temoignages.create') }}" class="btn btn-success" title="Create New Temoignages">
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

							<form method="POST" action="{{ route('temoignages.temoignages.update', $temoignages->id) }}" id="edit_temoignages_form" name="edit_temoignages_form" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PUT">
							@include ('admin.temoignages.form', [
														'temoignages' => $temoignages,
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
