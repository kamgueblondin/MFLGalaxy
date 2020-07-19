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
					@if(Session::has('success_message'))
						<div class="alert alert-success">
							<span class="glyphicon glyphicon-ok"></span>
							{!! session('success_message') !!}

							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>

						</div>
					@endif

					<div class="panel panel-default">

						<div class="panel-heading clearfix">

							<div class="pull-left">
								<h4 class="mt-5 mb-5">Galeries</h4>
							</div>

							<div class="btn-group btn-group-sm pull-right" role="group">
								<a href="{{ route('galeries.galeries.create') }}" class="btn btn-success" title="Create New Galeries">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								</a>
							</div>

						</div>
						
						@if(count($galeriesObjects) == 0)
							<div class="panel-body text-center">
								<h4>No Galeries Available.</h4>
							</div>
						@else
						<div class="panel-body panel-body-with-table">
							<div class="table-responsive">

								<table class="table table-striped ">
									<thead>
										<tr>
											<th>Image</th>
											<th>Title English</th>
											<th>Title Frensh</th>
											<th>Title Spanish</th>
											<th>Title Deush</th>

											<th></th>
										</tr>
									</thead>
									<tbody>
									@foreach($galeriesObjects as $galeries)
										<tr>
											<td>{{ $galeries->image }}</td>
											<td>{{ $galeries->title_english }}</td>
											<td>{{ $galeries->title_frensh }}</td>
											<td>{{ $galeries->title_spanish }}</td>
											<td>{{ $galeries->title_deush }}</td>

											<td>

												<form method="POST" action="{!! route('galeries.galeries.destroy', $galeries->id) !!}" accept-charset="UTF-8">
												<input name="_method" value="DELETE" type="hidden">
												{{ csrf_field() }}

													<div class="btn-group btn-group-xs pull-right" role="group">
														<a href="{{ route('galeries.galeries.show', $galeries->id ) }}" class="btn btn-info" title="Show Galeries">
															<span class="glyphicon glyphicon-open" aria-hidden="true"></span>
														</a>
														<a href="{{ route('galeries.galeries.edit', $galeries->id ) }}" class="btn btn-primary" title="Edit Galeries">
															<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
														</a>

														<button type="submit" class="btn btn-danger" title="Delete Galeries" onclick="return confirm(&quot;Click Ok to delete Galeries.&quot;)">
															<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
														</button>
													</div>

												</form>
												
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>

							</div>
						</div>

						<div class="panel-footer">
							{!! $galeriesObjects->render() !!}
						</div>
						
						@endif
					
					</div>
				</div>
            </div>
        </div>
    </div>
@stop
