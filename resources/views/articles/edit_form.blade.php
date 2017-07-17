@extends("../layout/master")

@section("title")
	EDIT {{ $article->title }}
@endsection 

@section("main_content")
<div class="row">
	<div class="col-md-6">
		<form class="form-horizontal" method="POST" action='{{ url("/edit/$article->id") }}'>
		{{ csrf_field() }}
			<div class="form-group">
				<label class="control-label">
					Title:
				</label>
				<input class="form-control" type="text" name="title" id="title" placeholder="Blog Title" value="{{ $article->title }}">
			</div>
			<div class="form-group">
				<label class="control-label">
				Content: </label>
				<textarea class="form-control" name="content" id="content" placeholder="Content Here">{{ $article->content }}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info pull-right">Submit</button>
			</div>
		</form>
	</div>
</div>
@endsection

