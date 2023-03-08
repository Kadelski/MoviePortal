
<html>

<div class="movies">
            <div class="movie">
                <p>Title: {{ $movies["original_title"] }}</p>
                <img src="https://image.tmdb.org/t/p/w500/{{ $movies["poster_path"] }}" alt="">
                <p>{{ $movies["overview"] }}</p>
                <p>Status: {{ $movies["status"] }}</p>
                <p>budget: {{ $movies["budget"] }}</p>
            </div>
    @foreach ($movies["genres"] as $movie)
        {{$movie["name"]}}
    @endforeach

    @foreach ($movies["genres"] as $movie)
        <img src="https://image.tmdb.org/t/p/w500/{{ $movies["poster_path"] }}" alt="">
    @endforeach
</div>

</html>
