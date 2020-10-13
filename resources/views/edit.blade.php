<!DOCTYPE html>
<html>
<head>
	<title> edit </title>
</head>
<body>

	<div class="container">
		<form action="{{ route('updatepost') }}" method="POST">
			@csrf
			<input type="hidden" name="id" value="{{ $post->id }}">
			<br>
			<input type="text" class="form-control" name="author" value="{{ $post->author }}">
			<br>
			<textarea name="text" class="form-control">{{ $post->text }}</textarea>
			<button class="btn btn-primary">update</button>
		</form>
	</div>

</body>
</html>