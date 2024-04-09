<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-8">Popular Movies</h1>
        <div class="grid grid-cols-4 gap-4">
            @foreach($movies->results as $movie)
            <div class="max-w-xs rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://image.tmdb.org/t/p/w500/{{ $movie->poster_path }}" alt="{{ $movie->title }}">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $movie->title }}</div>
                    <p class="text-gray-700 text-base">{{ $movie->overview }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const favoriteButtons = document.querySelectorAll('.favorite-button');

            favoriteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const movieId = this.dataset.movieId;
                    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

                    if (!favorites.includes(movieId)) {
                        favorites.push(movieId);
                        localStorage.setItem('favorites', JSON.stringify(favorites));
                        alert('Movie added to favorites!');
                    } else {
                        alert('Movie is already in favorites!');
                    }
                });
            });
        });
    </script>

</body>

</html>
