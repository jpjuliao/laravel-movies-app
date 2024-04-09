<!DOCTYPE html>
<html>
	<head>
		<title>Movies</title>
	</head>
	<body>
		<div class="container">
			<h1>Popular Movies</h1>
			<div class="row">
				@foreach($movies->results as $movie)
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="https://image.tmdb.org/t/p/w500/{{ $movie->poster_path }}" alt="{{ $movie->title }}">
						<div class="card-body">
							<h5 class="card-title">{{ $movie->title }}</h5>
							<p class="card-text">{{ $movie->overview }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</body>
</html>
