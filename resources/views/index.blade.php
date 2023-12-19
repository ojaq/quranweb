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
    @if (isset($quranData['data']['surahs']['references']))
        @foreach ($quranData['data']['surahs']['references'] as $surah)
            <h2><a href="{{ url('/surah/' . $surah['number']) }}">{{ $surah['englishName'] }}</a></h2>
            <p>Number: {{ $surah['number'] }}</p>
            <p>Name: {{ $surah['name'] }}</p>
            <p>Translation: {{ $surah['englishNameTranslation'] }}</p>
            <p>Number of Ayahs: {{ $surah['numberOfAyahs'] }}</p>
            <p>Revelation Type: {{ $surah['revelationType'] }}</p>
        @endforeach
    @endif
</body>

</html>
