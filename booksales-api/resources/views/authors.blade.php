<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
</head>
<body>
    <h1>List of Authors</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author['id'] }} - {{ $author['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>