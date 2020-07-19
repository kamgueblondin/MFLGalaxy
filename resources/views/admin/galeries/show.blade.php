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
							<h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Galeries' }}</h4>
						</span>

						<div class="pull-right">

							<form method="POST" action="{!! route('galeries.galeries.destroy', $galeries->id) !!}" accept-charset="UTF-8">
							<input name="_method" value="DELETE" type="hidden">
							{{ csrf_field() }}
								<div class="btn-group btn-group-sm" role="group">
									<a href="{{ route('galeries.galeries.index') }}" class="btn btn-primary" title="Show All Galeries">
										<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
									</a>

									<a href="{{ route('galeries.galeries.create') }}" class="btn btn-success" title="Create New Galeries">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									</a>
									
									<a href="{{ route('galeries.galeries.edit', $galeries->id ) }}" class="btn btn-primary" title="Edit Galeries">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>

									<button type="submit" class="btn btn-danger" title="Delete Galeries" onclick="return confirm(&quot;Click Ok to delete Galeries.?&quot;)">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</div>
							</form>

						</div>

					</div>

					<div class="panel-body">
						<dl class="dl-horizontal">
							<dt>Image</dt>
							<dd>{{ $galeries->image }}</dd>
							<dt>Title English</dt>
							<dd>{{ $galeries->title_english }}</dd>
							<dt>Title Frensh</dt>
							<dd>{{ $galeries->title_frensh }}</dd>
							<dt>Title Spanish</dt>
							<dd>{{ $galeries->title_spanish }}</dd>
							<dt>Title Deush</dt>
							<dd>{{ $galeries->title_deush }}</dd>
							<dt>Content English</dt>
							<dd>{{ $galeries->content_english }}</dd>
							<dt>Content Frensh</dt>
							<dd>{{ $galeries->content_frensh }}</dd>
							<dt>Content Spanish</dt>
							<dd>{{ $galeries->content_spanish }}</dd>
							<dt>Content Deush</dt>
							<dd>{{ $galeries->content_deush }}</dd>
							<dt>Created At</dt>
							<dd>{{ $galeries->created_at }}</dd>
							<dt>Updated At</dt>
							<dd>{{ $galeries->updated_at }}</dd>

						</dl>

					</div>
				</div>

				</div>
            </div>
        </div>
    </div>
@stop
