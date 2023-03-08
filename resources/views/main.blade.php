
<html>

<div class="movies">
@foreach ($movies as $movie)
    <a href="http://127.0.0.1:8000/api/movie/{{$movie["id"]}}">
        <div class="movie">
                <p>Title: {{ $movie["original_title"] }}</p>
                <img src="https://image.tmdb.org/t/p/w500/{{ $movie["poster_path"] }}" alt="">
        </div>
    </a>
@endforeach
</div>

</html>
