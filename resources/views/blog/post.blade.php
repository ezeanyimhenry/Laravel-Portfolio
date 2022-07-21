<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Table</title>
</head>
<body>
    <table>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Registered</th>
        </thead>
        <tbody>
            <tr>
                @foreach ($users as $user)
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
            @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>