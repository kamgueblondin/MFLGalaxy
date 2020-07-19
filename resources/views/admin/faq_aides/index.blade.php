@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<!-- Main content -->
<div class="row">
<div class="col-12">
	<div class="card">
		<div class="card-header">
		  <h3 class="card-title">DataTable with default features</h3>
		</div>
		<!-- /.card-header -->
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
					<h4 class="mt-5 mb-5">Faq Aides</h4>
				</div>

				<div class="btn-group btn-group-sm pull-right" role="group">
					<a href="{{ route('faq_aides.faq_aides.create') }}" class="btn btn-success" title="Create New Faq Aides">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				</div>

			</div>
			
			@if(count($faqAidesObjects) == 0)
				<div class="panel-body text-center">
					<h4>No Faq Aides Available.</h4>
				</div>
			@else
			<div class="panel-body panel-body-with-table">
				<div class="table-responsive">

					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>

								<th></th>
							</tr>
						</thead>
						<tbody>
						@foreach($faqAidesObjects as $faqAides)
							<tr>
								<td>{{ $faqAides->name }}</td>
								<td>{{ $faqAides->email }}</td>

								<td>

									<form method="POST" action="{!! route('faq_aides.faq_aides.destroy', $faqAides->id) !!}" accept-charset="UTF-8">
									<input name="_method" value="DELETE" type="hidden">
									{{ csrf_field() }}

										<div class="btn-group btn-group-xs pull-right" role="group">
											<a href="{{ route('faq_aides.faq_aides.show', $faqAides->id ) }}" class="btn btn-info" title="Show Faq Aides">
												<span class="glyphicon glyphicon-open" aria-hidden="true"></span>
											</a>
											<a href="{{ route('faq_aides.faq_aides.edit', $faqAides->id ) }}" class="btn btn-primary" title="Edit Faq Aides">
												<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
											</a>

											<button type="submit" class="btn btn-danger" title="Delete Faq Aides" onclick="return confirm(&quot;Click Ok to delete Faq Aides.&quot;)">
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
				{!! $faqAidesObjects->render() !!}
			</div>
			
			@endif
		
	 <!-- /.card-body -->
			  </div>
			</div>
		</div>
	</div>
	</div>
	</div>
	@stop
	@section('adminlte_js')
	<!-- DataTables -->
	<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('vendor/datatables-plugins/responsive/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('vendor/datatables-plugins/responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('vendor/datatables-plugins/responsivejs/responsive.bootstrap4.min.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('vendor/dist/js/adminlte.min.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{asset('vendor/dist/js/demo.js')}}"></script>
	<!-- page script -->
	<script>
	  $(function () {
		$("#example1").DataTable({
		  "responsive": true,
		  "autoWidth": false,
		});
		$('#example2').DataTable({
		  "paging": true,
		  "lengthChange": false,
		  "searching": false,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false,
		  "responsive": true,
		});
	  });
	</script>
  @endsection