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
							<h4 class="mt-5 mb-5">Enquiry Aides</h4>
						</div>

						<div class="btn-group btn-group-sm pull-right" role="group">
							<a href="{{ route('enquiry_aides.enquiry_aides.create') }}" class="btn btn-success" title="Create New Enquiry Aides">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</a>
						</div>

					</div>
					
					@if(count($enquiryAidesObjects) == 0)
						<div class="panel-body text-center">
							<h4>No Enquiry Aides Available.</h4>
						</div>
					@else
					<div class="panel-body panel-body-with-table">
						<div class="table-responsive">

							<table class="table table-striped ">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Number</th>

										<th></th>
									</tr>
								</thead>
								<tbody>
								@foreach($enquiryAidesObjects as $enquiryAides)
									<tr>
										<td>{{ $enquiryAides->name }}</td>
										<td>{{ $enquiryAides->email }}</td>
										<td>{{ $enquiryAides->number }}</td>

										<td>

											<form method="POST" action="{!! route('enquiry_aides.enquiry_aides.destroy', $enquiryAides->id) !!}" accept-charset="UTF-8">
											<input name="_method" value="DELETE" type="hidden">
											{{ csrf_field() }}

												<div class="btn-group btn-group-xs pull-right" role="group">
													<a href="{{ route('enquiry_aides.enquiry_aides.show', $enquiryAides->id ) }}" class="btn btn-info" title="Show Enquiry Aides">
														<span class="glyphicon glyphicon-open" aria-hidden="true"></span>
													</a>
													<a href="{{ route('enquiry_aides.enquiry_aides.edit', $enquiryAides->id ) }}" class="btn btn-primary" title="Edit Enquiry Aides">
														<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
													</a>

													<button type="submit" class="btn btn-danger" title="Delete Enquiry Aides" onclick="return confirm(&quot;Click Ok to delete Enquiry Aides.&quot;)">
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
						{!! $enquiryAidesObjects->render() !!}
					</div>
					
					@endif
				
				</div>
			</div>
            </div>
        </div>
    </div>
@stop
