<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index pakai tag</title>
</head>

<body>
    <h1>Index pakai post tag</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tagmanytomany as $key => $tag)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <ul>
                            @foreach ($tag->postmanytomany as $post)
                                <li>
                                    <span>{{ $post->title }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
