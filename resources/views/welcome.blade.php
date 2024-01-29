<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    {{-- JS & CSS --}}
    @vite('resources/js/app.js')
    {{-- /JS & CSS --}}
</head>

<body>
    <h1>Ciao</h1>
    <div class="container">
        <ul class="row gy-4">
            @foreach ($movies as $movie)
                {{-- <li class="col-3">{{ $movie->title }} - {{ $movie->original_title }}</li> --}}
                <li class="col-3">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-header">
                            {{ $movie->title }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $movie->original_title }}</li>
                            <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Release date: {{ $movie->date }}</li>
                            <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
