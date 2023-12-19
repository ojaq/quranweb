<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quran</title>
</head>

<body>
    <h1>Quran</h1>
    @if (isset($qData['data']['surahs']['references']))
        @foreach ($qData['data']['surahs']['references'] as $surah)
            <h2>{{ $surah['englishName'] }}</h2>
            <p>Number of Ayahs: {{ $surah['numberOfAyahs'] }}</p>
            <p>Revelation Type: {{ $surah['revelationType'] }}</p>
        @endforeach
    @endif
</body>

</html>
