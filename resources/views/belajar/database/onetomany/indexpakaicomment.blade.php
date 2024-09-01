<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index pakai comment</title>
</head>

<body>
    <h1>Index pakai comment</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Comment</th>
                <th>Post ID</th>
                <th>Post Title</th>
                <th>Post Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comment as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->comment }}</td>
                    <td>{{ $value->postonetomany->id }}</td>
                    <td>{{ $value->postonetomany->title }}</td>
                    <td>{{ $value->postonetomany->content }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
