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
							<h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Temoignages' }}</h4>
						</span>

						<div class="pull-right">

							<form method="POST" action="{!! route('temoignages.temoignages.destroy', $temoignages->id) !!}" accept-charset="UTF-8">
							<input name="_method" value="DELETE" type="hidden">
							{{ csrf_field() }}
								<div class="btn-group btn-group-sm" role="group">
									<a href="{{ route('temoignages.temoignages.index') }}" class="btn btn-primary" title="Show All Temoignages">
										<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
									</a>

									<a href="{{ route('temoignages.temoignages.create') }}" class="btn btn-success" title="Create New Temoignages">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									</a>
									
									<a href="{{ route('temoignages.temoignages.edit', $temoignages->id ) }}" class="btn btn-primary" title="Edit Temoignages">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>

									<button type="submit" class="btn btn-danger" title="Delete Temoignages" onclick="return confirm(&quot;Click Ok to delete Temoignages.?&quot;)">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</div>
							</form>

						</div>

					</div>

					<div class="panel-body">
						<dl class="dl-horizontal">
							<dt>Image</dt>
							<dd>{{ $temoignages->image }}</dd>
							<dt>Content English</dt>
							<dd>{{ $temoignages->content_english }}</dd>
							<dt>Content Frensh</dt>
							<dd>{{ $temoignages->content_frensh }}</dd>
							<dt>Content Spanish</dt>
							<dd>{{ $temoignages->content_spanish }}</dd>
							<dt>Content Deush</dt>
							<dd>{{ $temoignages->content_deush }}</dd>
							<dt>Created At</dt>
							<dd>{{ $temoignages->created_at }}</dd>
							<dt>Updated At</dt>
							<dd>{{ $temoignages->updated_at }}</dd>

						</dl>

					</div>
				</div>

				</div>
            </div>
        </div>
    </div>
@stop
