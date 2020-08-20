<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>
@foreach($catlist as $cat)
    <h4>{{$cat->name}}</h4>
    <p>{{$cat->first()->post->title}}</p>
@endforeach
</body>
</html>
