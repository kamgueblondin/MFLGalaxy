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
								<h4 class="mt-5 mb-5">{{ isset($faqAides->name) ? $faqAides->name : 'Faq Aides' }}</h4>
							</span>
					
							<div class="pull-right">
					
								<form method="POST" action="{!! route('faq_aides.faq_aides.destroy', $faqAides->id) !!}" accept-charset="UTF-8">
								<input name="_method" value="DELETE" type="hidden">
								{{ csrf_field() }}
									<div class="btn-group btn-group-sm" role="group">
										<a href="{{ route('faq_aides.faq_aides.index') }}" class="btn btn-primary" title="Show All Faq Aides">
											<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
										</a>
					
										<a href="{{ route('faq_aides.faq_aides.create') }}" class="btn btn-success" title="Create New Faq Aides">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
										</a>
										
										<a href="{{ route('faq_aides.faq_aides.edit', $faqAides->id ) }}" class="btn btn-primary" title="Edit Faq Aides">
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</a>
					
										<button type="submit" class="btn btn-danger" title="Delete Faq Aides" onclick="return confirm(&quot;Click Ok to delete Faq Aides.?&quot;)">
											<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
										</button>
									</div>
								</form>
					
							</div>
					
						</div>
					
						<div class="panel-body">
							<dl class="dl-horizontal">
								<dt>Name</dt>
								<dd>{{ $faqAides->name }}</dd>
								<dt>Email</dt>
								<dd>{{ $faqAides->email }}</dd>
								<dt>Message En</dt>
								<dd>{{ $faqAides->message_en }}</dd>
								<dt>Message Fr</dt>
								<dd>{{ $faqAides->message_fr }}</dd>
								<dt>Message Es</dt>
								<dd>{{ $faqAides->message_es }}</dd>
								<dt>Message De</dt>
								<dd>{{ $faqAides->message_de }}</dd>
								<dt>Created At</dt>
								<dd>{{ $faqAides->created_at }}</dd>
								<dt>Updated At</dt>
								<dd>{{ $faqAides->updated_at }}</dd>
					
							</dl>
					
						</div>
					</div>

					<div class="panel-body">
						<dl class="dl-horizontal">
							<dt>Name</dt>
							<dd>{{ $faqAides->name }}</dd>
							<dt>Email</dt>
							<dd>{{ $faqAides->email }}</dd>
							<dt>Message</dt>
							<dd>{{ $faqAides->message }}</dd>
							<dt>Created At</dt>
							<dd>{{ $faqAides->created_at }}</dd>
							<dt>Updated At</dt>
							<dd>{{ $faqAides->updated_at }}</dd>

						</dl>

					</div>
				</div>
        </div>
    </div>
@stop
