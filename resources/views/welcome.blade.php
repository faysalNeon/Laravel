<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>
{{--    @foreach($data['post'] as $post)--}}
{{--        <h3>{{$post->title}}</h3>--}}
{{--        <p>{{$post->category->name}}</p>--}}
{{--    @endforeach--}}
{{--@dd($data['cat']);--}}

{{--@foreach($data['cat'] as $cat)--}}
{{--    <h3>{{$cat->name}}</h3>--}}
{{--    <ol>--}}
{{--        @foreach($cat->notun as $post)--}}
{{--            <li>{{$post->title}}</li>--}}
{{--        @endforeach--}}
{{--    </ol>--}}
{{--@endforeach--}}

{{--    @foreach($data['post'] as $post)--}}
{{--        <h3>{{$post->title}}</h3>--}}
{{--        @foreach($post->tags as $tag)--}}
{{--            <li>{{$tag->name}}</li>--}}
{{--        @endforeach--}}
{{--    @endforeach--}}

    @foreach($data['tag'] as $tag)
        <h3>{{$tag->name}}</h3>
        @foreach($tag->posts as $post)
            <li>{{$post->title}}</li>
        @endforeach
    @endforeach
</body>
</html>
