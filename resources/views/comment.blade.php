<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>
@foreach($PostList as $com)
    <h4>{{$com->body}}</h4>
    <p>{{$com->first()->post->title}}</p>
@endforeach
</body>
</html>
