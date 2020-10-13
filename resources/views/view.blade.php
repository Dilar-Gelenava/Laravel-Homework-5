<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table,td,tr,th{
			border:2px solid black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
	<title> {{ $post['author'] }} </title>
</head>
<body>
	<div style="margin-left: 50%; transform: translate(-50%);" class="container">
		<table class="table">
			<tr>
				<th> ID </th>
				<th> Author </th>
				<th> Created At </th>
				<th> Updated At </th>
			</tr>
			<tr>
				<td> {{ $post["id"] }} </td>
				<td> {{ $post["author"] }} </td>
				<td> {{ $post["created_at"] }} </td>
				<td> {{ $post["updated_at"] }} </td>
			</tr>
		</table>
		<br>
		<div style="border: 3px solid green;">
			<h3> {{ $post['author'] }} </h3>
			<p> {{ $post['text'] }} </p>
		</div>
		
	</div>

    <br>
    <div style="margin-left: 50%; transform: translate(-50%);">
    	<h2>Add a Comment</h2>
        <form action="{{ route('storepostcomment') }}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post["id"] }}">
            <input type="text" class="form-control" id="inputAuthor" placeholder="Author" name="author">
            <br>
            <textarea class="form-control" id="inputText" placeholder="Text" name="text"></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>


    <div style="margin-left: 50%; transform: translate(-50%);">
    	<h2> Comments </h2>
    	@foreach ($comments as $comment)

    	<div style="border: 3px solid green;" class="container">
    		<h3> {{ $comment['author'] }} </h1>
    		<p> {{ $comment['text'] }} </p>
    		<p>{{ $comment->created_at->diffForHumans() }}</p>
    	</div>

    	@endforeach
    </div>



</body>
</html>