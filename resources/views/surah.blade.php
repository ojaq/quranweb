<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $surahData['data']['englishName'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-warning mt-3"><a href="/">Home</a></button>
        <h1>{{ $surahData['data']['englishName'] }}</h1>
        <h2>Juz: {{ $surahData['data']['ayahs'][0]['juz'] }}</h2>

        @foreach ($surahData['data']['ayahs'] as $key => $ayah)
            <div class="card my-3">
                <div class="card-body">
                    <h3 class="card-title">Ayah {{ $ayah['numberInSurah'] }}</h3>
                    <p class="card-text fs-1 text-end">{{ $ayah['text'] }}</p>
                    <p class="card-text fs-5">{{ $surahTranslate['data'][0]['ayahs'][$key]['text'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
