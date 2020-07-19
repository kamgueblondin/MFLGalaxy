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
							<h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Blogs' }}</h4>
						</span>

						<div class="pull-right">

							<form method="POST" action="{!! route('blogs.blogs.destroy', $blogs->id) !!}" accept-charset="UTF-8">
							<input name="_method" value="DELETE" type="hidden">
							{{ csrf_field() }}
								<div class="btn-group btn-group-sm" role="group">
									<a href="{{ route('blogs.blogs.index') }}" class="btn btn-primary" title="Show All Blogs">
										<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
									</a>

									<a href="{{ route('blogs.blogs.create') }}" class="btn btn-success" title="Create New Blogs">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									</a>
									
									<a href="{{ route('blogs.blogs.edit', $blogs->id ) }}" class="btn btn-primary" title="Edit Blogs">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>

									<button type="submit" class="btn btn-danger" title="Delete Blogs" onclick="return confirm(&quot;Click Ok to delete Blogs.?&quot;)">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</div>
							</form>

						</div>

					</div>

					<div class="panel-body">
						<dl class="dl-horizontal">
							<dt>Image</dt>
							<dd>{{ $blogs->image }}</dd>
							<dt>Title English</dt>
							<dd>{{ $blogs->title_english }}</dd>
							<dt>Title Frensh</dt>
							<dd>{{ $blogs->title_frensh }}</dd>
							<dt>Title Spanish</dt>
							<dd>{{ $blogs->title_spanish }}</dd>
							<dt>Title Deush</dt>
							<dd>{{ $blogs->title_deush }}</dd>
							<dt>Content English</dt>
							<dd>{{ $blogs->content_english }}</dd>
							<dt>Content Frensh</dt>
							<dd>{{ $blogs->content_frensh }}</dd>
							<dt>Content Spanish</dt>
							<dd>{{ $blogs->content_spanish }}</dd>
							<dt>Content Deush</dt>
							<dd>{{ $blogs->content_deush }}</dd>
							<dt>User</dt>
							<dd>{{ optional($blogs->User)->id }}</dd>
							<dt>Created At</dt>
							<dd>{{ $blogs->created_at }}</dd>
							<dt>Updated At</dt>
							<dd>{{ $blogs->updated_at }}</dd>

						</dl>

					</div>
				</div>

				</div>
            </div>
        </div>
    </div>
@stop
