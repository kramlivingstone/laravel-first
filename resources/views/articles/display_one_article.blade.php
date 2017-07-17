@extends("../layout/master")

@section("title")
	{{ $article->title }}
@endsection 

@section("main_content")
	{{ $article->content}}
	<br>
	<a href='{{ url("/home")}}'>Home</a>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="POST" action='{{ url("/create_comment/$article->id") }}'>
				{{ csrf_field() }}
					<div class="form-group">
						<label class="control-label">
						Comment: </label>
						<textarea class="form-control" name="comment" id="cpmment" placeholder="Comment Here"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info pull-right">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3>Comment Section:</h3>
				@foreach($article->comments as $comment)
				<div class="row">
					<div class="col-xs-6">
						{{ $comment->created_at }}
					</div>
					<div class="col-xs-6">
						{{ $comment->comment }} <br>
						<a style="font-size: 11px;" href="#">Like</a><span> &middot; </span><a style="font-size: 11px;" href="#">Delete</a>

					</div>
				</div>
				<hr>
				@endforeach
			</div>
		</div>
	</div>
@endsection

