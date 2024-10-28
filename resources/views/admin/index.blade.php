@foreach ($articles as $article)
    <h2>{{ $article->name }}</h2>
    <p>By: {{ $article->author }}</p>
    <img src="{{ asset('storage/' . $article->image_path) }}" alt="Article Image">
    <p>{{ $article->description }}</p>
@endforeach
