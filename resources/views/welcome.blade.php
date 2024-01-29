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
    <header>
        <h1>Ciao</h1>
    </header>
    <main>
        <div class="container">
            <div class="row g-4">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex align-items-stretch">
                        <div class="card text-center w-100">
                            <h4 class="card-header">
                                {{ $movie->title }}
                            </h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item fw-lighter fst-italic">{{ $movie->original_title }}</li>
                                <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                                <li class="list-group-item">Release date: {{ $movie->date }}</li>
                                <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
