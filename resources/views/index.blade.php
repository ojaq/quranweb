<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1>Quran</h1>
        @if (isset($quranData['data']['surahs']['references']))
            @foreach ($quranData['data']['surahs']['references'] as $surah)
                <div class="card my-3">
                    <div class="card-body">
                        <h2 class="card-title"><a href="{{ url('/surah/' . $surah['number']) }}">{{ $surah['englishName'] }}</a></h2>
                        <p class="card-text">Number: {{ $surah['number'] }}</p>
                        <p class="card-text">Name: {{ $surah['name'] }}</p>
                        <p class="card-text">Translation: {{ $surah['englishNameTranslation'] }}</p>
                        <p class="card-text">Number of Ayahs: {{ $surah['numberOfAyahs'] }}</p>
                        <p class="card-text">Revelation Type: {{ $surah['revelationType'] }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
