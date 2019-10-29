<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        @foreach($users as $user)
        <tr>
            <th>{{$user->id}}</th>
            <th>{{$user->name}}</th>
            <th>{{$user->email}}</th>
            <th>{{$user->created_at}}</th>
            <th>{{$user->updated_at}}</th>
        </tr>
        @endforeach
    </table>

    
</body>
</html>