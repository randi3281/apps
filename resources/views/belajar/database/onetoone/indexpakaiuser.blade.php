<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One to One</title>
</head>

<body>
    <h1>One to One</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Phone</th>
        </tr>
        @foreach ($user as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->profileonetoone->phone }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
