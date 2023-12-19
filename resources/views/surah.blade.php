<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $surahData['data']['englishName'] }}</title>
</head>
<body>
    <h1>{{ $surahData['data']['englishName'] }}</h1>
    <h2>Juz: {{ $surahData['data']['ayahs'][0]['juz'] }}</h2>

    @foreach ($surahData['data']['ayahs'] as $ayah)
        <h3>Ayah {{ $ayah['numberInSurah'] }}</h3>
        <p>{{ $ayah['text'] }}</p>
    @endforeach
</body>
</html>
