<!DOCTYPE html>
<html>
<head>
    <title>Genres</title>
</head>
<body>
    <h1>List of Genres</h1>
    <ul>
        @foreach($genres as $genre)
            <li>{{ $genre['name'] }}</li>
            <li>{{ $genre['description']}}</li>
        @endforeach
    </ul>
</body>
</html>