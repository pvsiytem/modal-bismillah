@extends('layout.master')

@section('title', 'Home')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>
    <div>
        @foreach($articles as $article)
            <div style="margin-bottom: 20px;">
                <h2>{{ $article->title }}</h2>
                <img src="{{ Voyager::image($article->image) }}" alt="{{ $article->title }}" style="max-width: 300px;">
                <p>{{ $article->content }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>

@include('layout.footer')
    
@endsection
