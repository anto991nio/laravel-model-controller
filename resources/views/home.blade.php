<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css\app.css')}}">
    <title>Document</title>
</head>
<body>

    <h1>Lista Film</h1>

    <div class="d-flex">
        @foreach($moviesList as $movie)

        <div class="card">
            <p class=""><strong> Titolo: {{ $movie['title'] }}</strong></p>
            <p class=""><strong> Titolo originale: {{ $movie['original_title'] }}</strong></p>
            <p class=""><strong> Nazionalità: {{ $movie['nationality'] }}</strong></p>
            <p class=""><strong> Data uscita:{{ $movie['date'] }}</strong></p>
            <p class=""><strong> Voto: {{ $movie['vote'] }}</strong></p>
        </div>


        @endforeach
    </div>

</body>
</html>
