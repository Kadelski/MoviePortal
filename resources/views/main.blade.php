
<html>

<div class="movies">
@foreach ($movies as $movie)
    <div class="movie">
        <p>Title: {{ $movie["original_title"] }}</p>
        <img src="https://image.tmdb.org/t/p/w500/{{ $movie["poster_path"] }}" alt="">
    </div>
@endforeach
</div>

</html>
