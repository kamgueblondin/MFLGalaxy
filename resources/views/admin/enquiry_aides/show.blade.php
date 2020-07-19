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
							<h4 class="mt-5 mb-5">{{ isset($enquiryAides->name) ? $enquiryAides->name : 'Enquiry Aides' }}</h4>
						</span>

						<div class="pull-right">

							<form method="POST" action="{!! route('enquiry_aides.enquiry_aides.destroy', $enquiryAides->id) !!}" accept-charset="UTF-8">
							<input name="_method" value="DELETE" type="hidden">
							{{ csrf_field() }}
								<div class="btn-group btn-group-sm" role="group">
									<a href="{{ route('enquiry_aides.enquiry_aides.index') }}" class="btn btn-primary" title="Show All Enquiry Aides">
										<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
									</a>

									<a href="{{ route('enquiry_aides.enquiry_aides.create') }}" class="btn btn-success" title="Create New Enquiry Aides">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									</a>
									
									<a href="{{ route('enquiry_aides.enquiry_aides.edit', $enquiryAides->id ) }}" class="btn btn-primary" title="Edit Enquiry Aides">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>

									<button type="submit" class="btn btn-danger" title="Delete Enquiry Aides" onclick="return confirm(&quot;Click Ok to delete Enquiry Aides.?&quot;)">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</div>
							</form>

						</div>

					</div>

					<div class="panel-body">
						<dl class="dl-horizontal">
							<dt>Name</dt>
							<dd>{{ $enquiryAides->name }}</dd>
							<dt>Email</dt>
							<dd>{{ $enquiryAides->email }}</dd>
							<dt>Number</dt>
							<dd>{{ $enquiryAides->number }}</dd>
							<dt>Message</dt>
							<dd>{{ $enquiryAides->message }}</dd>
							<dt>Created At</dt>
							<dd>{{ $enquiryAides->created_at }}</dd>
							<dt>Updated At</dt>
							<dd>{{ $enquiryAides->updated_at }}</dd>

						</dl>

					</div>
				</div>

				</div>
            </div>
        </div>
    </div>
@stop
