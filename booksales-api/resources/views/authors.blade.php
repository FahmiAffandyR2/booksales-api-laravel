<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
</head>
<body>
    <h1>List of Authors</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author['id'] }}</li>
            <li>{{ $author['name'] }}</li>
            <li>{{ $author['bio'] }}</li>
            <li>{{ $author['photo'] }}</li>
        @endforeach
    </ul>
</body>
</html>