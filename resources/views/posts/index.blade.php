<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POst</title>
</head>
<body>
    <h1> Post </h1>
    <ul>
        @foreach ($posts as $post)
        <li>
            <h3>{{ $post->required_date }}</h3>
            <p>{{ $post->description }}</P>
        </li>
        @endforeach
    </ul>
</body>
</html>