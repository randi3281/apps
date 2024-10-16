<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index pakai post </title>
</head>

<body>
    <h1>Index pakai post tag</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postmanytomany as $key => $post)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if ($post->tagmanytomany->isNotEmpty())
                            @foreach ($post->tagmanytomany as $tag)
                                <ul>
                                    <li>

                                        <span>{{ $tag->name }}</span>
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <span>No tags available</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
